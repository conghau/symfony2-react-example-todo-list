import React, {PropTypes} from 'react';
import C_TodoList from './C_TodoList';
import C_TodoListItem from './C_TodoListItem';
import _ from 'lodash';

class C_Todo extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        const todos = this.props.todos;
        let rows = [];
        if (_.isEmpty(todos) === false) {
            _.each(todos, function (todo, index) {
                rows.push(<C_TodoListItem key={index} todo={todo}/>)
            });
        }

        return (
            <div className="portlet light">
                <div className="portlet-body">
                    <C_TodoList caption={'Todo Demo'}>
                        {rows}
                    </C_TodoList>
                </div>
            </div>
        );
    }
}

C_Todo.propTypes = {
    todos: PropTypes.array.isRequired,
};

export default C_Todo;