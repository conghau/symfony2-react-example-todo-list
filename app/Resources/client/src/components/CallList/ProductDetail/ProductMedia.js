import React, {PropTypes} from 'react';
import "../../../../node_modules/react-image-gallery/styles/scss/image-gallery.scss";
import ImageGallery from 'react-image-gallery';

class ProductMedia extends React.Component {

    constructor() {
        super();
        this.state = {
            showIndex: false,
            slideOnThumbnailHover: false,
            showBullets: false,
            infinite: true,
            showThumbnails: true,
            showFullscreenButton: false,
            showGalleryFullscreenButton: false,
            showPlayButton: false,
            showGalleryPlayButton: false,
            showNav: false,
            slideInterval: 2000,
            thumbnailPosition: 'bottom',
            showVideo: {},
        };
    }

    _onImageClick(event) {
        console.debug('clicked on image', event.target, 'at index', this._imageGallery.getCurrentIndex());
    }

    _onSlide(index) {
        this._resetVideo();
    }

    _resetVideo() {
        this.setState({showVideo: {}});

        if (this.state.showPlayButton) {
            this.setState({showGalleryPlayButton: true});
        }

        if (this.state.showFullscreenButton) {
            this.setState({showGalleryFullscreenButton: true});
        }
    }

    _toggleShowVideo(url) {
        this.state.showVideo[url] = !Boolean(this.state.showVideo[url]);
        this.setState({
            showVideo: this.state.showVideo
        });

        if (this.state.showVideo[url]) {
            if (this.state.showPlayButton) {
                this.setState({showGalleryPlayButton: false});
            }

            if (this.state.showFullscreenButton) {
                this.setState({showGalleryFullscreenButton: false});
            }
        }
    }

    _renderVideo(item) {
        return (
            <div className="image-gallery-image">
                {
                    this.state.showVideo[item.embedUrl] ?
                        <div className="video-wrapper">
                            <a
                                className="close-video"
                                onClick={this._toggleShowVideo.bind(this, item.embedUrl)}
                            >
                            </a>

                            {item.embedUrl ?
                                <iframe
                                    width="100%"
                                    height="315"
                                    src={item.embedUrl}
                                    frameBorder="0"
                                    allowFullScreen
                                >
                                </iframe> :
                                <img className="img-responsive" src="bundles/icareweb/img/no-video.jpg"/>
                            }

                        </div>
                        :
                        <a onClick={this._toggleShowVideo.bind(this, item.embedUrl)}>
                            <div className='play-button'></div>
                            <img src={item.original}/>
                            {
                                item.description &&
                                <span
                                    className="image-gallery-description"
                                    style={{right: '0', left: 'initial'}}
                                >
                                    {item.description}
                                </span>
                            }
                        </a>
                }
            </div>
        );
    }

    render() {
        // const images = [
        //     {
        //         thumbnail: `${PREFIX_URL}3v.jpg`,
        //         original: `${PREFIX_URL}3v.jpg`,
        //         embedUrl: 'https://www.youtube.com/embed/iNJdPyoqt8U?autoplay=1&showinfo=0',
        //         renderItem: this._renderVideo.bind(this)
        //     }
        // ];

        const images = [];
        const medias = this.props.medias;
        medias.map(media => {
            switch (media.media_type) {
                case "external-video" :
                    images.push({
                        thumbnail: media.thumb,
                        original: media.thumb,
                        embedUrl: (() => {
                            let regExp = /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
                            let match = media.url.match(regExp);
                            if (match && match[2].length == 11) {
                                return `https://www.youtube.com/embed/${match[2]}?autoplay=1&showinfo=0`;
                            } else {
                                return media.url;
                            }
                        })(),
                        renderItem: this._renderVideo.bind(this)
                    });
                    break;
                case "image":
                default:
                    images.push({
                        thumbnail: media.thumb,
                        original: media.url
                    });
            }

        });
        return (

            <div>
                <ImageGallery
                    ref={i => this._imageGallery = i}
                    items={images}
                    lazyLoad={false}
                    onClick={this._onImageClick.bind(this)}
                    onSlide={this._onSlide.bind(this)}
                    infinite={this.state.infinite}
                    showBullets={this.state.showBullets}
                    showFullscreenButton={this.state.showFullscreenButton && this.state.showGalleryFullscreenButton}
                    showPlayButton={this.state.showPlayButton && this.state.showGalleryPlayButton}
                    showThumbnails={this.state.showThumbnails}
                    showIndex={this.state.showIndex}
                    showNav={this.state.showNav}
                    thumbnailPosition={this.state.thumbnailPosition}
                    slideInterval={parseInt(this.state.slideInterval)}
                    slideOnThumbnailHover={this.state.slideOnThumbnailHover}
                />
            </div>
        );
    }
}

ProductMedia.propTypes = {
    medias: PropTypes.array.isRequired
};
export default ProductMedia;