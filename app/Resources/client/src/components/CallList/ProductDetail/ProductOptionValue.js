import React, {PropTypes} from 'react';

class ProductOptionValue extends React.Component {

    render() {
        return (
            <li>
                <input type="button"
                   className={`btn ${this.props.wpClass}`}
                   onClick={this.props.action}
                   disabled={this.props.disableElement}
                       value={this.props.name}
                />
            </li>
        );
    }
}
ProductOptionValue.propTypess = {
    wpClass: PropTypes.string,
    name: PropTypes.string.isRequired,
    action: PropTypes.func,
    disableElement: PropTypes.bool,
};
export default ProductOptionValue;