/******************************************************
 * Theme template class
 ******************************************************/
class Theme {

    /**
     * Class constructor, called when instantiating new class object
     */
    constructor() {
        if ( $('body.theme').length ) {
            // declare our class properties

            // call init
            this.init();
        }
    }

    /**
     * init is always called upon class load
     */
    init() {
        if ( $('body').hasClass('sidebar-collapsed') ) {
            $('.has-submenu').removeClass('open');
        }
        // bind events
        this.bindEvents();
        // show output
        this.showOutput();
    }

    /**
     * bind all necessary events
     */
    bindEvents() {
        const self = this;

        // show/hide header dropdowns on click
        $('.header-wrapper .is-clickable > a').on('click', function(e) {
             self.toggleHeaderDropdown(e, $(this));
        });

        // toggle our sidebar width
        $('.toggle-sidebar').on('click', function(e) {
            self.toggleSidebar(e, $(this));
        });

        // show/hide submenu on top level menu item click
        $('.has-submenu > a').on('click', function(e) {
            self.toggleSubmenu(e, $(this));
        });

        // toggle object sidebar menu
        $('.toggle-object-sidebar').on('click', function(e) {
            self.toggleObjectSidebar(e, $(this));
        });

        // show our help modal
        $('.help-wrapper a').on('click', function(e) {
            self.showHelpModal(e)
        });

        // hide our help modal
        $('.help-modal .modal-background, .help-modal .modal-close').on('click', function(e) {
             self.hideHelpModal();
        });

        // toggle our header menu when in reponsive mode
        $('.header-wrapper .navbar-burger.right').on('click', function(e) {
            self.toggleHeaderMenu();
        });

        // toggle our left sidebar menu when in responsive mode
        $('.header-wrapper .navbar-burger.left').on('click', function(e) {
            self.toggleSidebarMenu();
        });

        // hide expanded menus on body click
        $(document).on('click', function (e) {
            self.hideAllExpanded(e, $(this));
        });

    }

    /**
     * show our output text if it's set
     */
    showOutput() {
        if ( config.output ) {
            const output = JSON.parse(config.output);
            if ( output.type && output.text ) {
                const n = new Noty({
                    type: output.type === 'danger' ? 'error' : output.type,
                    text: output.text,
                    timeout: 5000
                }).show();
            }
        }
    }

    /******************************************************
     * Begin individual methods
     ******************************************************/

    /**
     * toggle our header menu on responsive design
     */
    toggleHeaderMenu() {
        $('.header-wrapper .navbar-burger, .header-wrapper .navbar-menu').toggleClass('is-active');
    }

    /**
     * toggle our sidebar menu on responsive design
     */
    toggleSidebarMenu() {
        $('.sidebar-wrapper').toggleClass('is-active');
    }
    
    /**
     * toggle a header dropdown
     */
    toggleHeaderDropdown(e, $this) {
        e.preventDefault();
        const $parent = $this.parent();
        $('.header-wrapper .has-dropdown.is-clickable').not($parent).removeClass('is-active');
        $parent.toggleClass('is-active');
    }

    /**
     * toggle our sidebar width
     */
    toggleSidebar(e, $this) {
        e.preventDefault();
        if ( !$('body').hasClass('sidebar-collapsed') ) {
            $('.has-submenu').removeClass('open');
            $('.submenu').attr('style', '');
        } else {
            $('.has-submenu.active').addClass('open');
        }
        $('body').toggleClass('sidebar-collapsed');
    }

    /**
     * show/hide a submenu
     */
    toggleSubmenu(e, $this) {
        e.preventDefault();
        const $li = $this.parent('li');
        $('.has-submenu').not($li).removeClass('expanded');
        if ( $('body').hasClass('sidebar-collapsed') ) {
            if ( !$(e.target).is('span') ) {
                $li.toggleClass('expanded');
            }
        } else {
            $this.next('.submenu').slideToggle('fast', () => {
                $li.toggleClass('open');
            });
        }
    }

    /**
     * toggle the object sidebar menu
     */
    toggleObjectSidebar(e, $this) {
        e.preventDefault();
        $this.closest('.object-wrapper').toggleClass('sidebar-collapsed');
    }

    /**
     * hide all expanded submenus
     */
    hideAllExpanded(e, $this) {
        if ( $(e.target).closest('.navbar-item').length === 0 ) {
            $('.header-wrapper .has-dropdown.is-active').removeClass('is-active');
        }
        if ( $(e.target).closest('.has-submenu').length === 0 ) {
            $('.has-submenu').removeClass('expanded');
        }
    }

    /**
     * Show our help modal
     */
    showHelpModal(e) {
        e.preventDefault();
        $('.help-modal').addClass('is-active');
    }

    /**
     * Hide our help modal
     */
    hideHelpModal() {
        $('.help-modal').removeClass('is-active');
    }

}

/******************************************************
 * Instantiate new class
 ******************************************************/
$(function() {
    new Theme();
});