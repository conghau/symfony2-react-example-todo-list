/* global
 iCareLocale
 */
import React, {PropTypes, createElement} from 'react';

const messages = (typeof  iCareLocale !== 'undefined') ? iCareLocale.messages : {};
const FormattedMessage = ({id}) => {
    if (messages[id]) {
        return createElement('span', null, ...[messages[id]]);
    } else {
        return createElement('span', null, ...[id]);
    }
};
FormattedMessage.propTypes = {
    id: PropTypes.string.isRequired
};

export default FormattedMessage;
