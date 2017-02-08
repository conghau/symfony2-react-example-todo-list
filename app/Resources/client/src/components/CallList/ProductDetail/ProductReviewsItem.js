import React, {PropTypes} from 'react';
import StarRatingComponent from 'react-star-rating-component';
import ReadMore from '../../common/Readmore';

class ProductReviewsItem extends React.Component {

    render() {
        return (
            <div className="mt-comment">
                <div className="mt-comment-img">
                    <img src={this.props.image}/>
                </div>
                <div className="mt-comment-body">
                    <div className="mt-comment-info">
                        <span className="mt-comment-author">{this.props.name}</span>
                        {this.props.rating &&
                            <span className="mt-comment-date">
                                <StarRatingComponent name={this.props.id}
                                     starColor="#ffb400"
                                     emptyStarColor="#ffb400"
                                     value={this.props.rating}
                                     editing={false}
                                     renderStarIcon={(index, value) => {
                                         return <span className={index <= value ? 'fa fa-star' : 'fa fa-star-o'} />;
                                     }}
                                     renderStarIconHalf={() => <span className="fa fa-star-half-full" />}
                                />
                            </span>
                        }
                    </div>
                    {this.props.title &&
                        <div className="mt-comment-title">
                            {this.props.title}
                        </div>
                    }
                    {this.props.message &&
                        <div className="mt-comment-text">
                            <ReadMore lines={3}>
                                {this.props.message}
                            </ReadMore>
                        </div>
                    }
                </div>
            </div>
        );
    }
}
ProductReviewsItem.propTypes = {
    id: PropTypes.string.isRequired,
    image: PropTypes.string,
    name: PropTypes.string,
    title: PropTypes.string,
    rating: PropTypes.number,
    message: PropTypes.string
};
export default ProductReviewsItem;