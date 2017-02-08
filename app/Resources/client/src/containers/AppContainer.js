/* global
 lang, iCareLocale
 */
import React, {Component, PropTypes} from 'react';
import {browserHistory, Router} from 'react-router';
import {Provider} from 'react-redux';
import {IntlProvider} from 'react-intl';

class AppContainer extends Component {
    static propTypes = {
        routes: PropTypes.object.isRequired,
        store: PropTypes.object.isRequired
    }

    shouldComponentUpdate() {
        return false;
    }

    render() {
        const intlData = {
            locale: lang || 'en',
            messages: iCareLocale
        };
        const {routes, store} = this.props;
        return (
            <Provider store={store}>
                <IntlProvider {...intlData}>
                    <div style={{height: '100%'}}>
                        <Router history={browserHistory} children={routes}/>
                    </div>
                </IntlProvider>
            </Provider>
        );
    }
}

export default AppContainer;
