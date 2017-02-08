/**
 * Created by gundamkid on 23/08/2016.
 */
import React, { PropTypes } from 'react';

const AlertMessage = ({ message, messageClassName }) => {
  var className = 'custom-alerts alert fade in alert-' + messageClassName;
  return (
    <div className={className}>
      <button type='button' className='close' data-dismiss='alert' aria-hidden='true' />
      <i className='fa-lg fa fa-warning' />            {message}
    </div>
        );
};

AlertMessage.propTypes = {
  message: PropTypes.string,
  messageClassName: PropTypes.string.isRequired
};

export default AlertMessage;
