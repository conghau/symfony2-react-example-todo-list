import React, {PropTypes} from 'react';

class ProductSearchEmptyState extends React.Component {

    render() {
        return (
            <div className="product-empty-state text-center">
                <div className="empty-state-body">
                    <i className={this.props.icon}></i>
                    <span>{this.props.text}</span>
                </div>
            </div>
        );
    }
}

ProductSearchEmptyState.propTypes = {
    icon: PropTypes.string.isRequired,
    text: PropTypes.string.isRequired
};

export default ProductSearchEmptyState;