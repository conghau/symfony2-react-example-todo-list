import React, {PropTypes} from 'react';
import {FormControl, FormGroup, ControlLabel} from 'react-bootstrap';
import {bindActionCreators} from 'redux';
import {connect} from 'react-redux';
import * as callListActions from '../../../actions/CallList/callListActions';
import {toastr} from 'react-redux-toastr';
import Select from "react-select";
import "react-select/dist/react-select.css";

class ShippingAddress extends React.Component {
    constructor(props, context) {
        super(props, context);

        this.state = {
            address: this.props.customer.street || '',
            province: this.props.customer.city || '',
            district: this.props.customer.district || '',
            postal_code: this.props.customer.postcode || '',
            phone: this.props.customer.telephone,
            search_key: '',
            icare_center:{}
        };

        this.handleFormControlChange = this.handleFormControlChange.bind(this);
        this.handleSearchIconClick = this.handleSearchIconClick.bind(this);
        this.handleFormSubmit = this.handleFormSubmit.bind(this);
        this.onLoadCity = this.onLoadCity.bind(this);
        this.handleLoadCity= this.handleLoadCity.bind(this);
        this.handleOnChangeSelect = this.handleOnChangeSelect.bind(this);
    }

    componentWillMount(){
        this.props.actions.loadIcareCenters();
    }

    handleFormControlChange(event) {
        let formControlValue = {};
        formControlValue[event.target.name] = event.target.value;
        this.setState(formControlValue);
    }

    handleSearchIconClick(event){
        this.props.actions.filterIcareCenters(this.state.search_key);
    }

    handleFormSubmit(event){
        event.preventDefault();
        this.props.actions.filterIcareCenters(this.state.search_key);
    }

    selectICareCenter(address_id){
        let shippingAddress = {};
        if(this.state.address === "" || this.state.province === "" || this.state.district === ""){
            let error;
            if(this.state.district === ""){
                error = iCareLocale.distric_error;
            }
            if(this.state.province === ""){
                error = iCareLocale.province_error;
            }
            if(this.state.address === ""){
                error = iCareLocale.address_error;
            }
            toastr.error(error);
        }else{
            for(let i = 0; i < this.props.iCareCenters.length; i ++){
                if(this.props.iCareCenters[i].address_id ===  address_id){
                    shippingAddress = this.props.iCareCenters[i];
                }
            }
            shippingAddress['type'] = "Delivery location";
            shippingAddress['address'] = this.state.address;
            shippingAddress['province'] = this.state.province;
            shippingAddress['district'] = this.state.district;
            shippingAddress['postal_code'] = this.state.postal_code;
            shippingAddress['phone'] = this.state.phone;
            this.props.setShippingAdress(shippingAddress);
        }
    }

    onLoadCity(event, cb) {
        if (!event) {
            return Promise.resolve({options: []});
        }
        this.handleLoadCity(event).then(data => {
            cb(null, {options: data, complete: true})
        });
    }

    handleLoadCity(event){
        return this.props.actions.loadCityAction(event);
    }

    handleOnChangeSelect(val) {
        let name = '';
        if(!_.isNull(val)) {
            name = val.value;
        }
        this.setState({
            province: name
        });
    }

    render() {
        let defaultCityOption = [];
        if (this.state.province) {
            defaultCityOption = [{
                value: this.state.province,
                label: this.state.province
            }];
        }
        return (
            <div className="form-body">
                <div className="form-group">
                    <label>{iCareLocale.address}</label>
                    <input type="text" className="form-control" name="address" value={this.state.address} onChange={this.handleFormControlChange}/>
                </div>

                <FormGroup>
                    <ControlLabel>{iCareLocale.province}</ControlLabel>
                    <Select.Async
                        name="province"
                        value={this.state.province}
                        loadOptions={this.onLoadCity}
                        placeholder={iCareLocale.select_province}
                        options={defaultCityOption}
                        onChange={this.handleOnChangeSelect}
                    />
                </FormGroup>

                <div className="form-group">
                    <label>{iCareLocale.district}</label>
                    <input type="text" className="form-control" name="district" value={this.state.district} onChange={this.handleFormControlChange}/>
                </div>
                <div className="form-group">
                    <label>{iCareLocale.postal_code}</label>
                    <input type="text" className="form-control" name="postal_code" value={this.state.postal_code} onChange={this.handleFormControlChange}/>
                </div>

                <form onSubmit={this.handleFormSubmit}>
                    <div className="form-group">
                        <label>{iCareLocale.select_fulfillment_centrer}</label>
                        <div className='input-icon left'>
                            <i className='icon-magnifier' onClick={this.handleSearchIconClick}/>
                            <FormControl type='text' bsClass='form-control input-circle' placeholder={iCareLocale.search} name="search_key" onChange={this.handleFormControlChange}/>
                        </div>
                    </div>
                    {(this.props.iCareCenters) ? <div className="list-group">
                        {this.props.iCareCenters.map(center =>
                            <a href="javascript:;" className="list-group-item" style={{marginBottom: "5px"}} key={center.address_id} onClick={this.selectICareCenter.bind(this, center.address_id)}>
                                <div className="row">
                                    <div className="col-md-10">
                                        <p style={{margin: "0px"}} name={center.code + "_center_code"}>{center.full_name}</p>
                                        <p style={{margin: "0px"}} name={center.code + "_center_address_1"}>{center.street}</p>
                                        <p style={{margin: "0px"}} name={center.code + "_center_address_2"}>{center.city + ", " + center.country_code}</p>
                                    </div>
                                </div>
                            </a>
                        )}
                    </div> : <div className="list-group"></div>
                    }
                </form>
            </div>
        );
    }
}

ShippingAddress.propTypes = {
    iCareCenters: PropTypes.array,
};

function mapStateToProps(state, ownProps) {
    return {
        iCareCenters: state.callList.iCareCenters,
    };
}

function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(callListActions, dispatch)
    };
}

export default connect(mapStateToProps, mapDispatchToProps)(ShippingAddress);