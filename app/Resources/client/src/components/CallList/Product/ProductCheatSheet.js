import React, {PropTypes} from 'react';
import ProductList from './ProductList';
import ProductListItem from './ProductListItem';

class ProductCheatSheet extends React.Component {
    
    render() {
        const products = [
            {
                id: 1,
                sku: 'iCARE-FJGB01',
                name: 'Samsung Galaxy 7',
                link: '#',
                image: '/bundles/icareweb/img/product.png',
                description: '$699,99/6 months (+10% Tax)',
                buttonName: 'Add to order',
                buttonClick: () => {
                    console.log('Click order');
                }
            },
            {
                id: 2,
                sku: 'iCARE-FJGB01',
                name: 'Samsung Galaxy 7',
                link: '#',
                image: '/bundles/icareweb/img/product.png',
                description: '$699,99/6 months (+10% Tax)',
                buttonName: 'Add to order',
                buttonClick: () => {
                    console.log('Click order');
                }
            },
            {
                id: 3,
                sku: 'iCARE-FJGB01',
                name: 'Samsung Galaxy 7',
                link: '#',
                image: '/bundles/icareweb/img/product.png',
                description: '$699,99/6 months (+10% Tax)',
                buttonName: 'Add to order',
                buttonClick: () => {
                    console.log('Click order');
                }
            }
        ];
        return (
            <div className="portlet box">
                <div className="portlet-title font-white bg-grey-gallery">
                    <div className="caption">
                        {iCareLocale.product_cheat_sheet}
                    </div>
                </div>
                <ProductList
                    wrapperClass="bg-white"
                    titleClass="font-white bg-grey-gallery"
                >
                    {products.map(product => {
                        return <ProductListItem
                            key={product.id}
                            sku={product.sku}
                            name={product.name}
                            image={product.image}
                            description={product.description || ''}
                            buttonName={product.buttonName || ''}
                            buttonClick={product.buttonClick}
                        />;
                    })}
                </ProductList>
            </div>
        );
    }
}

export default ProductCheatSheet;