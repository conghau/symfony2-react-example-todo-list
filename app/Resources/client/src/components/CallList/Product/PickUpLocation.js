import React, {PropTypes} from 'react';
import {FormControl, Row, Col} from 'react-bootstrap';
import {bindActionCreators} from 'redux';
import {connect} from 'react-redux';
import * as callListActions from '../../../actions/CallList/callListActions';

class PickUpLocation extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            search_key: '',
            icare_center:{}
        };

        this.handleFormControlChange = this.handleFormControlChange.bind(this);
        this.handleSearchIconClick = this.handleSearchIconClick.bind(this);
        this.handleFormSubmit = this.handleFormSubmit.bind(this);
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
        for(let i = 0; i < this.props.iCareCenters.length; i ++){
            if(this.props.iCareCenters[i].address_id ===  address_id){
                shippingAddress = this.props.iCareCenters[i];
            }
        }
        shippingAddress['type'] = "Pick-up location";
        this.props.setShippingAdress(shippingAddress);
    }

    render() {
        return (
        <form onSubmit={this.handleFormSubmit}>
            <div className="form-body">
                <div className="form-group">
                    <div className='input-icon left'>
                        <i className='icon-magnifier' onClick={this.handleSearchIconClick}/>
                        <FormControl type='text' bsClass='form-control input-circle' name="search_key" placeholder={iCareLocale.search} onChange={this.handleFormControlChange}/>
                    </div>
                </div>
                {(this.props.iCareCenters) ? <div className="list-group">
                    {this.props.iCareCenters.map(center =>
                        <a href="javascript:;" className="list-group-item m-b-xs" key={center.address_id} onClick={this.selectICareCenter.bind(this, center.address_id)}>
                            <Row>
                                <Col md={10}>
                                    <p className="m-n" name={center.code + "_center_code"}>{center.full_name}</p>
                                    <p className="m-n" name={center.code + "_center_address_1"}>{center.street}</p>
                                    <p className="m-n" name={center.code + "_center_address_2"}>{center.city + ", " + center.country_code}</p>
                                </Col>
                            </Row>
                        </a>
                    )}
                    </div> : <div className="list-group"></div>
                }
            </div>
        </form>
        );
    }
}

PickUpLocation.propTypes = {
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

export default connect(mapStateToProps, mapDispatchToProps)(PickUpLocation);