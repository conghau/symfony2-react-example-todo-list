import React, {PropTypes} from 'react';

class ProductList extends React.Component {

    render() {
        return (
            <div className="product-listing">
                <div className={`mt-element-list ${this.props.wrapperClass}`}>
                    {this.props.title &&
                        <div className={`mt-list-head list-news ext-1 ${this.props.titleClass}`}>
                            {this.props.title}
                        </div>
                    }
                    <div className="mt-list-container list-news ext-1">
                        <ul>
                            {this.props.children}
                        </ul>
                    </div>
                </div>
            </div>
        );
    }
}

ProductList.propTypes = {
    wrapperClass: PropTypes.string,
    title: PropTypes.string,
    titleClass: PropTypes.string
};

export default ProductList;