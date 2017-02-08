import React, {PropTypes} from 'react';
import {Form, FormGroup, FormControl, InputGroup, Button, ControlLabel} from 'react-bootstrap';
import {FormattedMessage} from 'react-intl';
import _ from 'lodash';

class ProductSearchBar extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            keyword: '',
            catalog: {}
        };
        this.handleSubmit = this.handleSubmit.bind(this);
        this.handleFormControlChange = this.handleFormControlChange.bind(this);
        this.handleKeyPress = this.handleKeyPress.bind(this);
        this.formatOption = this.formatOption.bind(this);
    }

    componentWillMount() {
        if(_.isUndefined(this.props.onLoadCategory) === false) {
            return this.props.onLoadCategory().then(response => {
               this.setState({
                   catalog: response
               }) ;
            });
        }
    }

    componentDidMount() {
        let self = this;
        $(".product-search-bar .select2, .product-search-bar .select2-multiple").select2({
            placeholder: (iCareLocale['product.modal.search_bar.category'] || ''),
            width: null,
            dropdownParent: $(".modal")
        }).on('change', function(event) {
            self.handleFormControlChange(event);
        });
    }

    handleSubmit(event) {
        let data = {
            keyword: this.state.keyword || '_all_',
            categoryId: this.state.category,
            priceFrom: this.state.priceFrom,
            priceTo: this.state.priceTo
        };
        this.props.onSearchProduct(data);
    }

    handleFormControlChange(event) {
        let formControlValue = {};
        if (event.target.type == 'checkbox') {
            formControlValue[event.target.name] = event.target.checked ? true : false;
        } else {
            formControlValue[event.target.name] = event.target.value;
        }

        this.setState(formControlValue);
    }

    handleKeyPress(event, cb) {
        let k = event.key;
        if ('Enter' == k && event.shiftKey === false) {
            event.preventDefault();
            cb();
        }
    }

    formatOption(data, textAppend, options, cb) {
        try {
            if(_.isEmpty(data) || data.is_active === false) return [];

            data.map(item => {
                options.push({
                    value: item.id,
                    name: `${textAppend} ${_.capitalize(item.name)}`
                });
                if(_.isEmpty(item.children_data) === false) {
                    let text = textAppend.concat('&mdash;');
                    cb(item.children_data, text, options, cb);
                }
            });
        } catch (err){}

        return options;
    }

    render() {
        const catalog = this.state.catalog;
        let options = this.formatOption(catalog.children_data, '', [], this.formatOption);
        return (
            <div className="product-search-bar">
                <Form onSubmit={this.handleSubmit}>
                    <FormGroup className="form-control-inline">
                        <InputGroup>
                            <InputGroup.Button>
                                <Button className="btn-icon input-circle-left bg-white" onClick={(e) =>this.handleSubmit(e)}>
                                    <i className="fa fa-search"></i>
                                </Button>
                            </InputGroup.Button>
                            <FormControl
                                type="text" name="keyword"
                                value={this.state.keyword}
                                onChange={this.handleFormControlChange}
                                onKeyPress={(e) => this.handleKeyPress(e, this.handleSubmit)}
                            />
                            <select
                                className="form-control input-circle-right bg-white select2"
                                name="category"
                                onChange={this.handleFormControlChange}
                            >
                                <option key="product_search_0" value="0">
                                    {iCareLocale['product.modal.search_bar.category.all']}
                                </option>

                                {options.map(option => {
                                    return (
                                        <option
                                            key={`product_search_${option.value}`}
                                            value={option.value}
                                            dangerouslySetInnerHTML={{__html: option.name}}>
                                        </option>
                                    );
                                })}
                                {/*{optionRender}*/}

                            </select>
                        </InputGroup>
                    </FormGroup>
                    <FormGroup>
                        <ControlLabel>{iCareLocale.price}</ControlLabel>
                        <div className="clearfix"></div>
                        <FormControl
                            type="number"
                            name="priceFrom"
                            className="input-small inline-block"
                            value={this.state.priceFrom}
                            onChange={this.handleFormControlChange}
                        />
                        <span className="inline-block p-w-xs">-</span>
                        <FormControl
                            type="number"
                            name="priceTo"
                            className="input-small inline-block"
                            value={this.state.priceTo}
                            onChange={this.handleFormControlChange}
                        />
                        <Button className="btn btn-circle grey-mint pull-right" onClick={(e) =>this.handleSubmit(e)}>
                            {iCareLocale.search}
                        </Button>
                    </FormGroup>
                </Form>
            </div>
        );
    }
}

ProductSearchBar.propTypes = {
    onSearchProduct: PropTypes.func.isRequired,
    onLoadCategory: PropTypes.func
};

export default ProductSearchBar;