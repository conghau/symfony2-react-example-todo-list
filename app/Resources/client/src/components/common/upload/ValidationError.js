import React, { PropTypes } from 'react';
import Popover from 'react-bootstrap/lib/Popover';
import OverlayTrigger from 'react-bootstrap/lib/OverlayTrigger';
import Button from 'react-bootstrap/lib/Button';

class ValidationError extends React.Component {
  render () {
    const popoverId = 'popover-positioned-' + this.props.rowNumber;
    const popoverLeft = (
      <Popover id={popoverId}>
        <ul className='list-unstyled'>
          {this.props.errors.map((error, index) =>
            <li key={index}>{error[Object.keys(error)]}</li>
                    )}
        </ul>
      </Popover>
        );
    return (
      <div>
        <OverlayTrigger trigger='click' placement='right' overlay={popoverLeft}>
          <a className='label label-lg btn-danger'>error <span className='badge'>{this.props.errors.length}</span></a>

        </OverlayTrigger>
      </div>
        );
  }
}
ValidationError.propTypes = {
  errors: PropTypes.array.isRequired,
  rowNumber: PropTypes.number
};

export default ValidationError;
