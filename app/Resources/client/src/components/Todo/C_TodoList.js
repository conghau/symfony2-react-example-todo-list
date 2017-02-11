import React, {PropTypes} from 'react';
import {Table, Col, Row} from 'react-bootstrap';

class C_TodoList extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        let caption = this.props.caption || 'Todo';
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
C_TodoList.propTypes = {
    caption: PropTypes.string
};
export default C_TodoList;
