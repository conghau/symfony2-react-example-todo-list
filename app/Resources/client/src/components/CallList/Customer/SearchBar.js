import React, {PropTypes} from "react";
import ReactDOM from "react-dom";
import {
    Form,
    FormGroup,
    FormControl,
    InputGroup,
    ControlLabel,
    Button,
    Tooltip,
    OverlayTrigger,
    Row,
    Col
} from "react-bootstrap";
import moment from "moment";
import Select from "react-select";
import "react-select/dist/react-select.css";
import _ from "lodash";
import RememberFilters from './RememberFilters';

class SearchBar extends React.Component {

    static defaultProps = {
        keyLocalStorage: 'searchBarState'
    };

    constructor(props, context) {
        super(props, context);

        this.state = this.getDefaultState();

        this.onResetClick = this.onResetClick.bind(this);
        this.handleFormControlChange = this.handleFormControlChange.bind(this);
        this.onAdvanceSearchSubmit = this.onAdvanceSearchSubmit.bind(this);
        this.handleOnChangeSelect = this.handleOnChangeSelect.bind(this);
        this.onLoadCompany = this.onLoadCompany.bind(this);
        this.handleKeyPress = this.handleKeyPress.bind(this);
        this.onToggleAdvanced = this.onToggleAdvanced.bind(this);
        this.onFiltersClearAll = this.onFiltersClearAll.bind(this);
        this.onFiltersRemove = this.onFiltersRemove.bind(this);
    }

    getDefaultState() {
        return {
            purchase_date_start: '',
            purchase_date_end: '',
            min_credit: '',
            max_credit: '',
            min_due: '',
            max_due: '',
            is_new: false,
            have_purchase: false,
            companies: [],
            organization_id: '',
            organization_name: '',
            keyword: '',
            showAdvanced: false,
            classAction: 'fa-angle-down',
            hasSent: false,
        };
    }

    componentWillMount() {
        let localStorage = this.getLocalStorage(this.props.keyLocalStorage);
        if (_.isEmpty(localStorage) === false) {
            this.setState(localStorage, () => {
                this.setState({
                    showAdvanced: false,
                    classAction: 'fa-angle-down',
                    hasSent: false
                }, () => {
                    if(this.checkDefaultState() === false) {
                        this.onAdvanceSearchSubmit();
                    }
                });
            });
        }
    }

    componentDidMount() {
        let self = this;
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                autoclose: true
            }).on('change', function (event) {
                self.handleFormControlChange(event);
            });
        }
    }

    checkDefaultState() {
        return _.isEqual(this.state, this.getDefaultState());
    }

    getFieldKeys() {
        return [
            'keyword',
            'company',
            'credit_limit',
            'is_new',
            'have_purchase',
            'due_limit',
            'last_purchase'
        ];
    }

    setLocalStorage(key, data) {
        if (typeof(Storage) !== "undefined") {
            // Code for localStorage/sessionStorage.
            localStorage.setItem(key, JSON.stringify(data));
        } else {
            // Sorry! No Web Storage support..
        }
    }

    getLocalStorage(key) {
        if (typeof(Storage) !== "undefined") {
            // Code for localStorage/sessionStorage.
            try {
                return JSON.parse(localStorage.getItem(key));
            } catch (err) {
                return null;
            }

        } else {
            // Sorry! No Web Storage support..
            return null;
        }
    }

    handleCalendarButtonClick(name) {
        this[name].onInputClick();
    }

    onAdvanceSearchSubmit() {
        let data = {
            is_new_member: this.state.is_new,
            has_purchased: this.state.have_purchase,
            due_limit_from: this.state.min_due,
            due_limit_to: this.state.max_due,
            credit_limit_from: this.state.min_credit,
            credit_limit_to: this.state.max_credit,
            organization_id: this.state.organization_id,
            keyword: this.state.keyword,
            is_adv_search: true,
            purchase_date_start: this.state.purchase_date_start,
            purchase_date_end: this.state.purchase_date_end
        };
        if (true == this.state.hasSent) return;
        this.setState({hasSent: true}, () => {
            this.setLocalStorage(
                this.props.keyLocalStorage,
                this.state
            );
            this.props.onSearch(data);
        });
    }

    mappingFilters() {
        let filters = [];
        let keys = this.getFieldKeys();
        // Keyword
        if(this.state.keyword) {
            filters.push({
                key: keys[0],
                label: (iCareLocale['search.remembers_filter.keyword'] || ''),
                text: `${this.state.keyword}`
            });
        }

        // Company
        if(this.state.organization_name) {
            filters.push({
                key: keys[1],
                label: (iCareLocale['search.remembers_filter.company'] || ''),
                text: `${this.state.organization_name}`
            });
        }

        // Credit Limit
        if(this.state.min_credit || this.state.max_credit) {
            filters.push({
                key: keys[2],
                label: (iCareLocale['search.remembers_filter.credit_limit'] || ''),
                text: `${this.state.min_credit} - ${this.state.max_credit}`
            });
        }

        // Is New
        if(this.state.is_new) {
            filters.push({
                key: keys[3],
                label: (iCareLocale['search.remembers_filter.is_new_icare'] || ''),
                text: (iCareLocale['search.remembers_filter.is_new_icare.yes'] || '')
            });
        }

        // Have purchase
        if(this.state.have_purchase) {
            filters.push({
                key: keys[4],
                label: (iCareLocale['search.remembers_filter.have_purchase'] || ''),
                text: (iCareLocale['search.remembers_filter.have_purchase.yes'] || '')
            });
        }

        // Due Limit
        if(this.state.min_due || this.state.max_due) {
            filters.push({
                key: keys[5],
                label: (iCareLocale['search.remembers_filter.due_limit'] || ''),
                text: `${this.state.min_due} - ${this.state.max_due}`
            });
        }

        // Purchase dates
        if(this.state.purchase_date_start || this.state.purchase_date_end) {
            filters.push({
                key: keys[6],
                label: (iCareLocale['search.remembers_filter.last_purchase_date'] || ''),
                text: `${this.state.purchase_date_start} - ${this.state.purchase_date_end}`
            });
        }

        return filters;
    }

    onResetClick() {
        this.setState({
            purchase_date_start: '',
            purchase_date_end: '',
            min_credit: '',
            max_credit: '',
            min_due: '',
            max_due: '',
            is_new: false,
            have_purchase: false,
            organization_id: '',
            organization_name: '',
            keyword: '',
        });
    }

    getDatePickerControl(name, value) {
        return (
            <div className="input-group date date-picker"
                 data-date-format="dd/mm/yyyy">
                <FormControl
                    id={name}
                    name={name}
                    value={value} readOnly
                    onChange={this.handleDatePickerChange}
                />
                <span className="input-group-btn">
                    <button className="btn default" type="button">
                        <i className="fa fa-calendar"></i>
                    </button>
                </span>
            </div>
        );
    }

    handleDatePickerChange(name, data) {
        let formControlValue = {};
        formControlValue[name] = data instanceof moment ? data.format('YYYY-MM-DD') : '';
        this.setState(formControlValue);
    }

    handleFormControlChange(event) {
        let formControlValue = {};
        formControlValue['hasSent'] = false;
        if (event.target.type == 'checkbox') {
            formControlValue[event.target.name] = event.target.checked ? true : false;
        } else {
            formControlValue[event.target.name] = event.target.value;
        }
        this.setState(formControlValue);
    }

    handleOnChangeSelect(val) {
        let id = '', name = '';
        if(!_.isNull(val)) {
            id = val.value;
            name = val.label;
        }
        this.setState({
            organization_id: id,
            organization_name: name,
            hasSent: false
        });
    }

    onLoadCompany(event, cb) {
        if (!event) {
            return Promise.resolve({options: []});
        }
        this.props.handleLoadCompany(event).then(data => {
            cb(null, {options: data, complete: true})
        });
    }

    handleKeyPress(event, cb) {
        let k = event.key;
        if ('Enter' == k && event.shiftKey === false) {
            event.preventDefault();
            cb();
        }
    }

    onToggleAdvanced() {
        this.setState({
            showAdvanced: !this.state.showAdvanced,
            classAction: !this.state.showAdvanced ? 'fa-angle-down' : 'fa-angle-up'
        });
    }

    onFiltersRemove(key) {
        let filters = this.getFieldKeys();

        let cb = () => {
            this.setState({
                    hasSent: false
                }, () => {
                this.setLocalStorage(
                    this.props.keyLocalStorage,
                    this.state
                );
                this.onAdvanceSearchSubmit();
            });
        };

        switch (key) {
            // Keyword
            case filters[0]:
                this.setState({
                    keyword: ''
                }, () => {
                    cb();
                });
                break;
            // Company
            case filters[1]:
                this.setState({
                    organization_id: '',
                    organization_name: ''
                }, () => {
                    cb();
                });
                break;
            // Credit Limit
            case filters[2]:
                this.setState({
                    min_credit: '',
                    max_credit: ''
                }, () => {
                    cb();
                });
                break;
            // Is new iCare Member
            case filters[3]:
                this.setState({
                    is_new: false
                }, () => {
                    cb();
                });
                break;
            // Have Purchase
            case filters[4]:
                this.setState({
                    have_purchase: false,
                }, () => {
                    cb();
                });
                break;
            // Due Limit
            case filters[5]:
                this.setState({
                    min_due: '',
                    max_due: ''
                }, () => {
                    cb();
                });
                break;
            // Last Purchase
            case filters[6]:
                this.setState({
                    purchase_date_start: '',
                    purchase_date_end: '',
                }, () => {
                    cb();
                });
                break;
        }
    }

    onFiltersClearAll() {
        this.setLocalStorage('searchBarState', null);
        this.onResetClick();
        this.onAdvanceSearchSubmit();
    }

    render() {

        let filters = this.mappingFilters();
        let defaultCompanyOption = [];
        if (this.state.organization_id && this.state.organization_name) {
            defaultCompanyOption = [{
                value: this.state.organization_id,
                label: this.state.organization_name
            }];
        }
        return (
            <div className="portlet light search-bar">
                {_.isEmpty(filters) === false &&
                    <RememberFilters
                        filters={filters}
                        onRemove={this.onFiltersRemove}
                        onClearAll={() => this.onFiltersClearAll()}
                    />
                }

                <div className="portlet-body form">
                    <Form onSubmit={this.onFormSubmit}>
                        <Row>
                            <Col md={8} sm={10} xs={10}>
                                <div className="input-icon left">
                                    <i className="icon-magnifier no-zindex" onClick={this.onClickSearch}/>
                                    <FormControl
                                        type="text"
                                        value={this.state.keyword}
                                        placeholder={iCareLocale.search_icare_member}
                                        name="keyword"
                                        ref={(ref) => this.keyword = ReactDOM.findDOMNode(ref)}
                                        onKeyPress={(e) => this.handleKeyPress(e, this.onAdvanceSearchSubmit)}
                                        onChange={this.handleFormControlChange}/>
                                </div>
                            </Col>
                            <div className="pull-left">
                                <ul className="list-inline">
                                    <li>
                                        <OverlayTrigger
                                            placement="bottom"
                                            overlay={
                                                <Tooltip id="search_tooltip">
                                                    {iCareLocale.search_tooltip}
                                                </Tooltip>
                                            }>
                                            <i className="fa fa-question-circle overlay-trigger"/>
                                        </OverlayTrigger>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onClick={this.onToggleAdvanced}>
                                            <h4>{iCareLocale.advance_search}
                                                <i className={`fa ${this.state.classAction}`}></i>
                                            </h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </Row>
                    </Form>
                </div>

                <div className="portlet-body horizontal-form" style={{
                    "display": (() => {
                        if (this.state.showAdvanced) return "block";
                        return "none";
                    })()
                }}
                >
                    <hr />

                    <Form className="form-body" disabled="disabled" onSubmit={this.onAdvanceSearchSubmit}>
                        <Row>

                            {/* Left */}
                            <Col md={5}>
                                <FormGroup>
                                    <ControlLabel>{iCareLocale['search.company']}</ControlLabel>
                                    <Select.Async
                                        ref={(ref) => this.orgId = ReactDOM.findDOMNode(ref)}
                                        value={this.state.organization_id || ''}
                                        loadOptions={this.onLoadCompany}
                                        options={defaultCompanyOption}
                                        placeholder={iCareLocale['search.choose_company']}
                                        onChange={this.handleOnChangeSelect}
                                    />
                                </FormGroup>
                                <FormGroup>
                                    <ControlLabel>{iCareLocale['search.credit_limit']}</ControlLabel>
                                    <Row>
                                        <Col md={6}>
                                            <FormGroup>
                                                <FormControl
                                                    type="number"
                                                    placeholder={iCareLocale['search.credit_limit.min']}
                                                    ref="min_credit_limit"
                                                    name="min_credit"
                                                    value={this.state.min_credit}
                                                    onChange={this.handleFormControlChange}/>
                                            </FormGroup>
                                        </Col>
                                        <Col md={6}>
                                            <FormGroup>
                                                <FormControl
                                                    type="number"
                                                    placeholder={iCareLocale['search.credit_limit.max']}
                                                    ref="max_credit_limit"
                                                    value={this.state.max_credit}
                                                    name="max_credit"
                                                    onChange={this.handleFormControlChange}/>
                                            </FormGroup>
                                        </Col>
                                    </Row>
                                </FormGroup>
                                <FormGroup>
                                    <ControlLabel>{iCareLocale['search.last_purchase_date']}</ControlLabel>
                                    <Row>
                                        <Col md={6}>
                                            {
                                                this.getDatePickerControl(
                                                    "purchase_date_start",
                                                    this.state.purchase_date_start
                                                )
                                            }
                                        </Col>
                                        <Col md={6}>
                                            {
                                                this.getDatePickerControl(
                                                    "purchase_date_end",
                                                    this.state.purchase_date_end
                                                )
                                            }
                                        </Col>
                                    </Row>
                                </FormGroup>

                            </Col>

                            {/* Right */}
                            <Col md={5} className="pull-right">
                                <FormGroup>
                                    <label className="mt-checkbox mt-checkbox-outline">
                                        <input
                                            type="checkbox"
                                            name="is_new"
                                            checked={this.state.is_new}
                                            onChange={this.handleFormControlChange}
                                        /> {iCareLocale['search.is_new_icare']}
                                        <span></span>
                                    </label>
                                    <OverlayTrigger
                                        placement="bottom"
                                        overlay={
                                            <Tooltip id="tooltip_new_member">
                                                {iCareLocale['search.is_new_icare.tooltip']}
                                            </Tooltip>
                                        }>
                                        <i className="fa fa-question-circle overlay-trigger"/>
                                    </OverlayTrigger>
                                </FormGroup>
                                <FormGroup>
                                    <label className="mt-checkbox mt-checkbox-outline">
                                        <input
                                            type="checkbox"
                                            id="have_purchase_checkbox"
                                            onChange={this.handleFormControlChange}
                                            name="have_purchase"
                                            checked={this.state.have_purchase}
                                        /> {iCareLocale['search.have_purchase']}
                                        <span></span>
                                    </label>
                                </FormGroup>
                                <FormGroup>
                                    <ControlLabel>{iCareLocale['search.due_limit']}</ControlLabel>
                                    <Row>
                                        <Col md={6}>
                                            <FormGroup>
                                                <FormControl
                                                    type="number"
                                                    placeholder={iCareLocale['search.due_limit.min']}
                                                    ref="min_due_limit" value={this.state.min_due}
                                                    name="min_due"
                                                    onChange={this.handleFormControlChange}/>
                                            </FormGroup>
                                        </Col>
                                        <Col md={6}>
                                            <FormGroup>
                                                <FormControl
                                                    type="number"
                                                    placeholder={iCareLocale['search.due_limit.max']}
                                                    ref="max_due_limit" value={this.state.max_due}
                                                    name="max_due"
                                                    onChange={this.handleFormControlChange}/>
                                            </FormGroup>
                                        </Col>
                                    </Row>
                                </FormGroup>
                            </Col>
                        </Row>

                        {/* Button */}
                        <Row>
                            <Col md={12}>
                                <FormGroup className="pull-right actions">
                                    <button
                                        type="button"
                                        className="btn btn-circle btn-link"
                                        onClick={this.onResetClick}>
                                        {iCareLocale['search.button_reset']}
                                    </button>
                                    <button
                                        type="button"
                                        className="btn btn-circle grey-mint"
                                        onClick={this.onAdvanceSearchSubmit}>
                                        {iCareLocale['search.button_search']}
                                    </button>
                                </FormGroup>
                            </Col>
                        </Row>
                    </Form>
                </div>
            </div>
        );
    }
}

SearchBar.propTypes = {
    onSearch: PropTypes.func.isRequired,
    onSearchAdvance: PropTypes.func,
    handleLoadCompany: PropTypes.func
};

export default SearchBar;
