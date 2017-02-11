import React, {PropTypes} from "react";
import {connect} from "react-redux";
import {bindActionCreators} from "redux";
import * as todoAction from "../../actions/Todo/TodoAction";
import Loader from "components/common/Loader";
import "rc-pagination/assets/index.css";
import C_Todo from "../../components/Todo/C_Todo.js";
import {Modal} from "react-bootstrap";
import C_TodoForm from "../../components/Todo/C_TodoForm";

class TodoPage extends React.Component {

    constructor(props, context) {
        super(props, context);
        this.state = {
            showModal: false
        };
        this.handleLoadTodoItem = this.handleLoadTodoItem.bind(this);
        this.handleSaveTodoItem = this.handleSaveTodoItem.bind(this);
        this.handleClickAddStory = this.handleClickAddStory.bind(this);
        this.handleSaveTodo = this.handleSaveTodo.bind(this);
        this.close = this.close.bind(this);

    }

    componentWillMount() {
        this.props.actions.loadListTodo();
    }

    getChildContext() {
        return {
            handleLoadTodoItem: this.handleLoadTodoItem,
            handleSaveTodoItem: this.handleSaveTodoItem,
        };
    }

    handleLoadTodoItem(todoId) {
        this.props.actions.loadListTodoDetail(todoId);
    }

    handleSaveTodoItem(data) {
        return this.props.actions.saveTodoItemAction(data);
    }

    handleClickAddStory() {
        this.setState({showModal: true})
    }

    close() {
        this.setState({
            showModal: false
        })
    }

    handleSaveTodo(data) {
        this.setState({
            showModal: false
        }, ()=> {
            this.props.actions.saveTodoAction(data).then(re => {
                if(re == true) {
                    this.props.actions.loadListTodo();
                }
            });
        });
    }

    render() {
        const todos = this.props.todos;
        return (
            <div>
                <div className="actions">
                    <a href="javascript:;"
                       onClick={this.handleClickAddStory}
                       className="btn btn-circle grey-mint btn-outline sbold">
                        <span><i className="fa fa-street-view"></i> Add Story</span>
                    </a>
                </div>
                <C_Todo todos={todos["hydra:member"] || []}/>

                {this.props.loading &&
                <Loader text="Loading..." overlay={true}/>
                }

                <Modal
                    show={this.state.showModal || false}
                    bsSize="large"
                    backdrop="static"
                    keyboard={false}
                    onHide={this.close}
                    aria-labelledby="contained-modal-title-lg">
                    <Modal.Header closeButton>
                        <Modal.Title>
                            Add Item
                        </Modal.Title>
                    </Modal.Header>
                    <Modal.Body className="bg-default">
                        <C_TodoForm onSave={this.handleSaveTodo}/>
                    </Modal.Body>
                </Modal>
            </div>
        );
    }
}

TodoPage.propTypes = {
    actions: PropTypes.object.isRequired,
};

TodoPage.childContextTypes = {
    handleLoadTodoItem: PropTypes.func,
    handleSaveTodoItem: PropTypes.func
};

function mapStateToProps(state, ownProps) {
    return {
        todos: state.todoList.todos,
        loading: state.ajaxCallsInProgress > 0
    };
}

function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(todoAction, dispatch)
    };
}

export default connect(mapStateToProps, mapDispatchToProps)(TodoPage);