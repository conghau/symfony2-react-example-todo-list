import React, {PropTypes} from 'react';
import {Panel} from 'react-bootstrap';
import Line from '../common/Line';

class BillingInfo extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    render() {
        return (
            <div>
                <Panel header={iCareLocale['sale_order.detail.summary']}>
                    {this.props.children}
                </Panel>
            </div>
        );
    }
}

export default BillingInfo;