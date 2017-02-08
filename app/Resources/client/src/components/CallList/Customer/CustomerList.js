import React, {PropTypes} from 'react';
import {Row, Col} from 'react-bootstrap';

class CustomerList extends React.Component {
    constructor(props, context) {
        super(props, context);

    }

    handleClick(name){
        this.props.handleSortCustomer(name);
    }

    render() {
        const caption = this.props.caption;
        return (
            <div>
                <Row>
                   <Col md={3}>
                       {caption &&
                       <p className="call-list-caption">
                           {caption}
                       </p>
                       }
                   </Col>
                </Row>

                {this.props.children}
            </div>
        );
    }
}

CustomerList.propTypes = {
    caption: PropTypes.string,
    handleSortCustomer: PropTypes.func
};

export default CustomerList;
