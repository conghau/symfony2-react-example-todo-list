import React, {PropTypes} from 'react';

class CustomerProfile extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        return (
            <div className="panel panel-default">
                <div className="panel-body">
                    <h5>{this.props.company}</h5>
                    <p> {iCareLocale['employee_id']}: {this.props.employeeId}
                        <br/> {iCareLocale['social_id']}: {this.props.socialId}
                        <br/> {iCareLocale['phone']}: {this.props.phone}</p>
                </div>
                {this.props.isInActive === true &&
                    <div className="panel-action red">{iCareLocale['inactive']}</div>
                }
            </div>
        );
    }
}
CustomerProfile.propTypes = {
    company: PropTypes.string,
    employeeId: PropTypes.string,
    socialId: PropTypes.string,
    phone: PropTypes.string,
    isInActive: PropTypes.bool
};

export default CustomerProfile;