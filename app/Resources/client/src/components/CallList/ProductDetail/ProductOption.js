import React, {PropTypes} from 'react';

class ProductOption extends React.Component {

    render() {
        return (
            <ul className="list-inline product-option">
                <li><strong>{this.props.name}:</strong></li>
                {this.props.children}
            </ul>
        );
    }
}
ProductOption.propTypes = {
    name: PropTypes.string.isRequired
};
export default ProductOption;