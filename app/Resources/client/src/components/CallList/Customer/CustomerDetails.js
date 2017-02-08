import React, {PropTypes} from 'react';
import {Row, Col} from 'react-bootstrap';
import CustomerProfile from './CustomerProfile';
import CustomerCredit from './CustomerCredit';

class CustomerDetails extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        return (
            <div>
                <Row>
                    <Col md={6}>
                        <CustomerProfile
                            company={this.props.profiles.company || ''}
                            employeeId={this.props.profiles.employee_id || ''}
                            socialId={this.props.profiles.social_id || ''}
                            phone={this.props.profiles.telephone || ''}
                            isInActive={(this.props.profiles.is_active == 0) || false}
                        />
                    </Col>
                    <Col md={6}>
                        <CustomerCredit
                            availableCreditLimit={this.props.credits.available_credit_limit || 0}
                            availableDueLimit={this.props.credits.available_due_limit || 0}
                            currentSavingAccount={this.props.credits.current_saving_account || 0}
                            dpd={this.props.credits.dpd || 0}
                        />
                    </Col>
                </Row>
            </div>
        );
    }
}
CustomerDetails.propTypes = {
    profiles: PropTypes.object.isRequired,
    credits: PropTypes.object.isRequired
};

export default CustomerDetails;