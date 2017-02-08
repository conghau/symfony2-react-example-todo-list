import React, {PropTypes} from 'react';
import {FormattedNumber} from 'react-intl';

class ProductPrice extends React.Component {

    render() {
        return (
            <p>
                {(this.props.price === this.props.old_price) ?
                    (
                        <span className="price">
                            {iCareLocale.price}: <FormattedNumber
                                value={this.props.price}
                                style='currency'
                                minimumFractionDigits={0}
                                currency={iCareCurrency}/>
                        </span>
                    ) :
                    (
                        <span className="old-price">
                            {iCareLocale.price}: <FormattedNumber
                                value={this.props.old_price}
                                style='currency'
                                minimumFractionDigits={0}
                                currency={iCareCurrency}/>
                        <span className="p-w-xs">-</span>
                        <FormattedNumber
                            value={this.props.price}
                            style='currency'
                            minimumFractionDigits={0}
                            currency={iCareCurrency}/>
                        </span>
                    )
                }
            </p>
        );
    };
}
ProductPrice.propTypes = {
    price: PropTypes.number.isRequired,
    old_price: PropTypes.number.isRequired
};
export default ProductPrice;