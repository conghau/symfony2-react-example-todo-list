import React, {PropTypes} from 'react';
import {Row, Col} from 'react-bootstrap';
import {FormattedNumber} from 'react-intl';

class BillingInfoItem extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    render() {
        let name = '';
        if(this.props.bold) {
            name = (<strong>{this.props.name}</strong>);
        }
        else {
            name = this.props.name
        }

        return (
            <Row className="static-info align-reverse">
                <Col md={8} className="name">
                    {this.props.link ?
                        (<a href="#">{name}</a>) :
                        name
                    }

                </Col>
                <Col md={4} className="value">
                    <FormattedNumber
                        value={this.props.value}
                        style='currency'
                        minimumFractionDigits={0}
                        currency={iCareCurrency}/>
                </Col>
            </Row>
        );
    }
}

BillingInfoItem.propTypes = {
    bold: PropTypes.bool,
    link: PropTypes.string,
    name: PropTypes.string,
    value: PropTypes.any
};

export default BillingInfoItem;