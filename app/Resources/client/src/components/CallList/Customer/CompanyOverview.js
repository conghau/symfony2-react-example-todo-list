import React, {PropTypes} from 'react';
import {Row, Col} from 'react-bootstrap';
import moment from 'moment';
import _ from 'lodash';

class CompanyOverview extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    getRepaymentMethod(methodNum) {
        switch (methodNum) {
            case 1:
                return (iCareLocale['customer.repayment_method_1'] || null);
            case 2:
                return (iCareLocale['customer.repayment_method_2'] || null);
            case 3:
                return (iCareLocale['customer.repayment_method_3'] || null);
            default:
                return null;
        }
    }

    getTypeOfMethod(type) {
        switch (type) {
            case 1:
                return (iCareLocale['customer.type_of_contract_1'] || null);
            case 2:
                return (iCareLocale['customer.type_of_contract_2'] || null);
            case 3:
                return (iCareLocale['customer.type_of_contract_3'] || null);
            default:
                return null;
        }
    }

    render() {
        const company = this.props.company;
        const icare_staffs = _.isUndefined(company.icare_staffs) ? [] : company.icare_staffs;
        const format = "DD/MM/YYYY";
        return (
            <div>
                <h4>{company.companyName}</h4>

                <Row>
                    <Col md={6}>
                        {/* netSuiteCustomerId */}
                        <div className="font-grey-cascade">{iCareLocale['customer.netsuite_id']}</div>
                        <label>{company.netSuiteCustomerId}</label>

                        {/* vatTaxNumber */}
                        <div className="font-grey-cascade">{iCareLocale['customer.vat_tax_number']}</div>
                        <label>{company.vatTaxNumber}</label>

                        {/* numberEmployees */}
                        <div className="font-grey-cascade">{iCareLocale['customer.number_of_employee']}</div>
                        <label>{company.numberEmployees}</label>

                        {/* Email */}
                        <div className="font-grey-cascade">{iCareLocale['customer.email']}</div>
                        <label>{company.email}</label>

                        {/* Phone */}
                        <div className="font-grey-cascade">{iCareLocale['customer.phone']}</div>
                        <label>{company.phone}</label>

                        {/* alternatePhone */}
                        <div className="font-grey-cascade">{iCareLocale['customer.alternate_phone']}</div>
                        <label>{company.alternatePhone}</label>

                        {/* address */}
                        <div className="font-grey-cascade">{iCareLocale['customer.address']}</div>
                        <label>{company.address}</label>
                    </Col>

                    <Col md={6}>
                        {/* contractStartDate */}
                        <div className="font-grey-cascade">{iCareLocale['customer.contract_start_date']}</div>
                        <label>
                            {company.contractStartDate &&
                                <span>
                                    {moment.utc(company.contractStartDate).format(format)}
                                </span>
                            }
                        </label>

                        {/* contractEndDate */}
                        <div className="font-grey-cascade">{iCareLocale['customer.contract_end_date']}</div>
                        <label>
                            {company.contractEndDate &&
                                <span>
                                    {moment.utc(company.contractEndDate).format(format)}
                                </span>
                            }
                        </label>

                        {/* salaryPaymentDate */}
                        <div className="font-grey-cascade">{iCareLocale['customer.salary_payment_day']}</div>
                        <label>{company.salaryPaymentDate}</label>

                        {/* repaymentMethod */}
                        <div className="font-grey-cascade">{iCareLocale['customer.repayment_mechanism']}</div>
                        <label>{this.getRepaymentMethod(company.repaymentMethod)}</label>

                        {/* alternatePhone */}
                        <div className="font-grey-cascade">{iCareLocale['customer.type_of_contract']}</div>
                        <label>{this.getTypeOfMethod(company.typeOfContract)}</label>

                        {/* icareMemberEligibleFields */}
                        <div className="font-grey-cascade">{iCareLocale['customer.icare_member_eligible_fields']}</div>
                        <label>{company.icareMemberEligibleFields}</label>
                    </Col>
                </Row>

                <Row>
                    <Col md={12}>
                        {/* primaryContact */}
                        <div className="font-grey-cascade">{iCareLocale['customer.primary_contact']}</div>
                        <label>1. {`${company.firstName || ''} ${company.lastName || ''} (${company.email || ''})`}</label>
                    </Col>
                    <Col md={12}>
                        {/* icareStaff */}
                        <div className="font-grey-cascade">{iCareLocale['customer.icare_staff']}</div>
                        {
                            icare_staffs.map((item, index) => {
                                return  <label key={item.userId || index}>{`${index + 1}. ${item.firstName || ''} ${item.lastName || ''} ${`(${item.username || ''})`}`}</label>;
                            })
                        }
                    </Col>
                </Row>
            </div>
        );
    }
}

CompanyOverview.propTypes = {
    company: PropTypes.object.isRequired
};

export default CompanyOverview;