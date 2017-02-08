import React, {PropTypes} from 'react';
import {Panel} from 'react-bootstrap';

class DeliveryInfo extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    render() {
        return (
            <div>
                <Panel header={this.props.title}>
                    {this.props.name} <br/>
                    {this.props.address}
                </Panel>
            </div>
        );
    }
}

DeliveryInfo.propTypes = {
    title: PropTypes.string,
    name: PropTypes.string,
    address: PropTypes.string
};

export default DeliveryInfo;