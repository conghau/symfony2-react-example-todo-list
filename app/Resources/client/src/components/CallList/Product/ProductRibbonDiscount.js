import React, {PropTypes} from 'react';

class ProductRibbonDiscount extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        return (
          <div className={`ribbon ${this.props.className}`}>{this.props.text}</div>
        );
    }
}
ProductRibbonDiscount.propTypess = {
    className: PropTypes.string,
    text: PropTypes.string
};

export default ProductRibbonDiscount;