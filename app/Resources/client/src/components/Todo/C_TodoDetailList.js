import React, {PropTypes} from 'react';
import C_TodoDetailListItem from './C_TodoDetailListItem';
import _ from 'lodash';
import {Table} from 'react-bootstrap';

class C_TodoDetailList extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        const todoItems = this.props.todoItems;
        let rows = [];
        if (_.isEmpty(todoItems) === false) {
            _.each(todoItems['data'], function (todo, index) {
                rows.push(<C_TodoDetailListItem key={index} todo={todo}/>)
            });
        }

        return (
            <Table responsive striped condensed hover className="sales-order">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {rows}
                </tbody>
            </Table>
        );
    }
}

C_TodoDetailList.propTypes = {
    todoItems: PropTypes.object.isRequired,
};

export default C_TodoDetailList;