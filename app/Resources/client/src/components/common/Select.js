import React, { PropTypes } from 'react';
import FormattedMessage from '../common/FormattedMessage';

const Select = ({ name, onChange, defaultOption, value, error, options, tabindex }) => {
  let tabIndexNumber = 0;
  if (tabindex) {
    tabIndexNumber = tabindex;
  }
  const handleChange = function (e) {

        // Update buttonText state
  };
  return (
    <div>
      <select
        name={name}
        value={value}
        onChange={onChange}
        className='form-control'
        tabIndex={tabIndexNumber}>
        <option value=''>{defaultOption}</option>
        {options.map((option) => {
          const optionText = `${option.text}`;
          return <option key={option.value}
            value={option.value}>
            {option.text}
          </option>;
        })
                }
      </select>
      {error && <div className='alert alert-danger'>{error}</div>}
    </div>
    );
};

Select.propTypes = {
  name: PropTypes.string.isRequired,
  onChange: PropTypes.func,
  defaultOption: PropTypes.string,
  value: PropTypes.string,
  error: PropTypes.string,
  label: PropTypes.string,
  options: PropTypes.arrayOf(PropTypes.object),
  tabindex: PropTypes.number
};

export default Select;
