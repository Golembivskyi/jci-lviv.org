import UIkit from 'uikit';
import {$, attr, before, css, each, addClass, hasAttr, offset} from 'uikit-util';

const selector = '.tm-header ~ [class*="uk-section"], .tm-header ~ * > [class*="uk-section"]';

export default {

    update: [

        {
            read(data) {

                const section = $(selector);
                const modifier = attr(section, 'tm-header-transparent');

                if (!modifier || !section) {
                    return false;
                }

                data.prevHeight = this.height;
                data.height = this.$el.offsetHeight;

                const sticky = UIkit.getComponent($('[uk-sticky]', this.$el), 'sticky');

                if (sticky) {

                    const dat = sticky.$options.data;

                    if (dat.animation !== 'uk-animation-slide-top') {
                        each({
                            top: selector,
                            animation: 'uk-animation-slide-top',
                            clsInactive: `uk-navbar-transparent uk-${modifier}`
                        }, (value, key) => dat[key] = sticky[key] = sticky.$props[key] = value);
                    }

                    sticky.$props.top = section.offsetHeight <= window.innerHeight ? selector : offset(section).top + 300;
                }

            },

            write(data) {

                if (!this.placeholder) {

                    const section = $(selector);
                    const modifier = attr(section, 'tm-header-transparent');

                    addClass(this.$el, 'tm-header-transparent');
                    addClass($('.tm-headerbar-top, .tm-headerbar-bottom'), `uk-${modifier}`);

                    this.placeholder = hasAttr(section, 'tm-header-transparent-placeholder')
                        && before($('[uk-grid]', section), '<div class="tm-header-placeholder uk-margin-remove-adjacent"></div>');

                    const navbar = $('[uk-navbar]', this.$el);
                    if (attr(navbar, 'dropbar-mode') === 'push') {
                        attr(navbar, 'dropbar-mode', 'slide');
                    }

                    if (!$('[uk-sticky]', this.$el)) {
                        addClass($('.uk-navbar-container', this.$el), `uk-navbar-transparent uk-${modifier}`);
                    }

                }

                if (this.placeholder && data.prevHeight !== data.height) {
                    css(this.placeholder, {height: data.height});
                }
            },

            events: ['load', 'resize']
        }

    ]

};
