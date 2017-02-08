import React, {PropTypes} from 'react';

class RememberFilters extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            filters: this.props.filters
        }
    }

    componentWillReceiveProps(nextProps) {
        this.setState({
            filters: nextProps.filters
        });
    }

    render() {
        let filters = this.state.filters || [];
        return (
            <div className="grid-filters">
                <div className="filters-title-wrap">
                    <span className="filters-title">
                        {iCareLocale['search.remembers_filter.title']}:
                    </span>
                </div>
                <div className="filters-list-wrap">
                    <ul className="filters-list">
                        {
                            filters.map((item, index) => {
                                return (
                                    <li key={index}>
                                        <span>{item.label}: </span>
                                        <span className="text">{item.text}</span>

                                        {this.props.onRemove &&
                                            <span className="action-remove">
                                                <a href="javascript:;" onClick={() => this.props.onRemove(item.key || '')}>
                                                    <i className="fa fa-close"></i>
                                                </a>
                                            </span>
                                        }
                                    </li>
                                );
                            })
                        }
                    </ul>
                </div>
                {this.props.onClearAll &&
                    <div className="filters-actions-wrap">
                        <a href="javascript:;" className="action-clear" onClick={this.props.onClearAll}>
                            {iCareLocale['search.remembers_filter.action_clear']}
                        </a>
                    </div>
                }
            </div>
        );
    }
}

RememberFilters.propTypes = {
    filters: PropTypes.array,
    onClearAll: PropTypes.func,
    onRemove: PropTypes.func
};

export default RememberFilters;