import React, {PropTypes} from 'react';

class ProductReviews extends React.Component {

    render() {
        return (
            <div className="mt-comments">
                 {this.props.children}
            </div>
        );
    }
}

export default ProductReviews;