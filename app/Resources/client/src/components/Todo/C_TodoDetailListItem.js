import React, {PropTypes} from 'react';
import C_TodoList from './C_TodoList';
import C_TodoListItem from './C_TodoListItem';
import _ from 'lodash';

class C_TodoDetailListItem extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {

        return (
            <tr>
                <td>{this.props.todo.title || ''}</td>
                <td>{this.props.todo.description || ''}</td>
                <td>
                    <i className="fa fa-angle-right" aria-hidden="true"></i>
                </td>
            </tr>
        );
    }
}

C_TodoDetailListItem.propTypes = {
     todo: PropTypes.array.isRequired,
};

export default C_TodoDetailListItem;