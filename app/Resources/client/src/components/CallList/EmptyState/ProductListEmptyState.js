import React, {PropTypes} from 'react';

class ProductListEmptyState extends React.Component {

    render() {
        return (
            <div className="product-listing">
                <div className="mt-element-list">
                    <div className="mt-list-container list-news ext-1">
                        <ul>
                            <li className="mt-list-item">
                                <div className="list-thumb">
                                    <img src="/bundles/icareweb/img/product.png" alt=""/>
                                </div>
                                <div className="list-item-content">
                                    <img src="/bundles/icareweb/img/paragraph.png" className="img-responsive" alt=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        );
    }
}

export default ProductListEmptyState;