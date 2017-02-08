import React, {PropTypes} from 'react';
import Image from '../../common/Image';
import ProductRibbonDiscount from './ProductRibbonDiscount';
import ProductPrice from '../ProductDetail/ProductPrice';

class ProductListItem extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    render() {
        return (
            <li className="mt-element-ribbon mt-list-item">
                <div className="list-thumb">
                    <a href={this.props.link}
                       onClick={this.props.showDetail}
                    >
                        <Image
                            src={this.props.image}
                            fallbackSrc="/bundles/icareweb/img/product.png"/>
                    </a>
                </div>
                <div className="list-item-content">
                    <h3>
                        <a href={this.props.link}
                           onClick={this.props.showDetail}
                        >{this.props.name}
                        </a>
                    </h3>
                    <p>{iCareLocale.sku}: {this.props.sku}</p>
                    {this.props.price &&
                        <ProductPrice price={parseFloat(this.props.price.price)}
                           old_price={parseFloat(this.props.price.old_price)}/>
                    }
                    {this.props.installment &&
                    <p>{iCareLocale.installment}: <span className="font-green-turquoise"> {this.props.installment}</span></p>
                    }

                    {this.props.buttonName &&
                        <div className="actions">
                            <a href="javascript:;"
                               onClick={this.props.buttonClick}
                               className="btn btn-circle bg-green bg-font-green sbold">
                                {this.props.buttonName}
                            </a>
                        </div>
                    }
                </div>
                {this.props.discount &&
                    <ProductRibbonDiscount
                        className="bg-red-mint bg-font-red-mint"
                        text={this.props.discount}
                    />
                }
            </li>
        );
    }
}

ProductListItem.propTypes = {
    sku: PropTypes.string,
    name: PropTypes.string,
    link: PropTypes.string,
    discount: PropTypes.string,
    price: PropTypes.object,
    installment: PropTypes.string,
    buttonName: PropTypes.string,
    buttonClick: PropTypes.func,
    showDetail: PropTypes.func
};

export default ProductListItem;