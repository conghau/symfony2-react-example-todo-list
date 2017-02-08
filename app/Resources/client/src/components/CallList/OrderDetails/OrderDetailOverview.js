import React, {PropTypes} from 'react';

class OrderDetailOverview extends React.Component {

    render() {
        return (
            <div>
                {this.props.children}
            </div>
        );
    }
}

export default OrderDetailOverview;