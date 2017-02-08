import React, {PropTypes} from 'react';
import {Tabs, Tab} from 'react-bootstrap';
import ProductReviews from './ProductReviews';
import ProductReviewsItem from './ProductReviewsItem';
import _ from 'lodash';

class ProductTab extends React.Component {

    constructor(props, context) {
        super(props, context);
        this.handleSelect = this.handleSelect.bind(this);
        this.state = {
            reviews: this.props.reviews,
            description: this.props.description
        };
    }

    handleSelect(activeKey) {
        switch (activeKey) {
            case 3:
                if(_.isEmpty(this.state.reviews) &&
                    !_.isUndefined(this.props.handleLoadReviews)) {
                    App.blockUI({
                        target: '#reviews',
                        animate: true
                    });
                    this.props.handleLoadReviews().then(data => {
                        this.setState({
                            reviews: data.reviews
                        });
                        App.unblockUI('#reviews');
                    });
                }
                break;
        }
    }

    render() {
        return (
            <Tabs defaultActiveKey={1}
                  onSelect={this.handleSelect}
                  id="product-tab"
                  className="tabbable-line">
                <Tab eventKey={1} title={iCareLocale.description}>
                    <div dangerouslySetInnerHTML={{__html: this.state.description}} />
                </Tab>
                <Tab eventKey={2} title={iCareLocale.product_canvas}>
                    <div></div>
                </Tab>
                <Tab eventKey={3} title={iCareLocale.reviews}>
                    <div id="reviews">
                    {this.state.reviews &&
                    <ProductReviews>
                        {this.state.reviews.map((review, index) => {
                            return <ProductReviewsItem
                                key={index}
                                id={`review${index}`}
                                image="bundles/icareweb/img/user.svg"
                                name={review.nickname || ''}
                                title={review.title || ''}
                                message={review.detail || ''}
                                rating={parseFloat(review.rating_votes[0].value || 0)}
                            />
                        })}
                    </ProductReviews>
                    }
                    </div>
                </Tab>
            </Tabs>
        );
    };
}

ProductTab.propTypes = {
    reviews: PropTypes.array,
    description: PropTypes.string,
    handleLoadReviews: PropTypes.func
};
export default ProductTab;