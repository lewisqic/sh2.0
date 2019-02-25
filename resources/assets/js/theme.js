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

        // show our help modal
        $('.help-wrapper a').on('click', function(e) {
            self.showHelpModal(e)
        });

        // hide our help modal
        $('.help-modal .modal-background, .help-modal .modal-close').on('click', function(e) {
             self.hideHelpModal();
        });

        // hide expanded menus on body click
        $(document).on('click', function (e) {
            self.hideAllExpanded(e, $(this));
        });

    }

    /******************************************************
     * Begin individual methods
     ******************************************************/

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