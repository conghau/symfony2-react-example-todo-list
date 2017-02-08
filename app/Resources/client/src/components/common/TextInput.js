import React, { PropTypes } from 'react';

const TextInput = ({ name, label, onChange, placeholder, value, error, tabindex }) => {
  let wrapperClass = 'form-group';
  if (error && error.length > 0) {
    wrapperClass += ' ' + 'has-error';
  }
  let tabIndexNumber = '0';
  if (tabindex) {
    tabIndexNumber = tabindex;
  }

  return (
    <div className={wrapperClass}>
      <label htmlFor={name}>{label}</label>
      <div className='field'>
        <input
          type='text'
          name={name}
          className='form-control'
          placeholder={placeholder}
          value={value}
          tabIndex={tabIndexNumber}
          onChange={onChange} />
        {error && <div className='alert alert-danger'>{error}</div>}
      </div>
    </div>
    );
};

TextInput.propTypes = {
  name: PropTypes.string.isRequired,
  label: PropTypes.string.isRequired,
  onChange: PropTypes.func.isRequired,
  placeholder: PropTypes.string,
  value: PropTypes.string,
  error: PropTypes.string,
  tabindex: PropTypes.string
};

export default TextInput;
