import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import _ from 'lodash';
import C_TodoDetailList from './C_TodoDetailList';
import C_TodoForm from './C_TodoForm';
import {Modal} from 'react-bootstrap';


class C_TodoDetailListItem extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            showModal: false,
            isCollapsed: false,
        };

        this.onToolsActionClick = this.onToolsActionClick.bind(this);
        this.close = this.close.bind(this);
        this.onPlaceOrderToggle = this.onPlaceOrderToggle.bind(this);
        this.onSaveTodoItem = this.onSaveTodoItem.bind(this);
    }

    onToolsActionClick() {
        this.setState({
            isCollapsed: !this.state.isCollapsed
        }, () => {
            const todo = this.props.todo;
            this.context.handleLoadTodoItem(todo["@id"]);
        });
    }

    onPlaceOrderToggle() {
        this.setState({
            showModal: true,
        })
    }

    onSaveTodoItem(data) {
        this.setState({
            showModal: false,
            isCollapsed: true,
        }, ()=> {
            this.context.handleSaveTodoItem(data).then(re => {
                    if (re == true && !_.isEmpty(data.todoId)) {
                        this.context.handleLoadTodoItem(data.todoId);
                    }
                });
        });
    }

    close() {
        this.setState({
            showModal: false
        })
    }

    render() {
        const todo = this.props.todo;
        return (
            <div>
                <div className="portlet box grey">
                    <div className="portlet-title">
                        <div className="caption">
                            <span>{todo.title}</span>
                            <a href="javascript:;">
                                {todo.title}
                            </a>
                        </div>
                        <div className="tools">
                            <a href="javascript:;"
                               className="toggle"
                               onClick={this.onToolsActionClick}>
                                {this.state.isCollapsed ?
                                    <i className="fa fa-angle-up"></i> :
                                    <i className="fa fa-angle-down"></i>
                                }
                            </a>
                        </div>
                        <div className="actions">
                            <a href="javascript:;"
                               onClick={this.onPlaceOrderToggle}
                               className="btn btn-circle grey-mint btn-outline sbold">
                                <span><i className="fa fa-street-view"></i> Add item</span>
                            </a>
                        </div>
                    </div>
                    <div className="portlet-body tabs-below">{
                        this.state.isCollapsed &&
                        <C_TodoDetailList
                            todoItems={this.props.todoItems}/>
                    }
                    </div>
                </div>
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
                        <C_TodoForm todoId={todo["@id"]} onSave={this.onSaveTodoItem}/>
                    </Modal.Body>
                </Modal>
            </div>
        );
    }
}

C_TodoDetailListItem.propTypes = {
    todo: PropTypes.object.isRequired,
};

C_TodoDetailListItem.contextTypes = {
    handleLoadTodoItem: PropTypes.func,
    handleSaveTodoItem: PropTypes.func,
};

function mapStateToProps(state, ownProps) {
    const todoId = ownProps.todo["@id"] || 0;
    const todoItems = (state.todoList.todoItems) || [];
    return {
        todoItems: _.first(todoItems.filter(item => item.id == todoId))
    };
}
// export default C_TodoDetailListItem;
export default connect(mapStateToProps)(C_TodoDetailListItem);