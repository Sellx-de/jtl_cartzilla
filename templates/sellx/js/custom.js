/*
* Make NOVA Bootstrap 5.3 compatible.
* A better way would be PHPQuery
* Or copying all NOVA template files and modifying them
* Or doing it by hand
* This JS can get very expensive and for now it is just a quick fix
*
* REMINDER: Do I need to change left for start and right for end ? Maybe there is some prettier way to do this ...
*/

/*
* As I cant modify the scc component (navitemdropdown), need to apply this brute solution.
* Maybe, I can also do it with PHPQuery or just submit an MR to JTL modifying the SCC component
* Also, I could try to replace the cssRenderer instance, but is it really worth it?
*/
const sccDropDowns = function () {
    const dropDowns = document.querySelectorAll(
        '.popper-static-dropdown .dropdown-menu'
    );
    for (let i = 0; i < dropDowns.length; i++) {
        let dropDown = dropDowns[i];
        if (dropDown.classList.contains('dropdown-menu-right')) {
            dropDown.classList.add('dropdown-menu-end');
        }
        dropDown.setAttribute('data-bs-popper', 'static');
    }
    let dropDownToggles = document.querySelectorAll('[data-toggle="dropdown"]');
    for (let i = 0; i < dropDownToggles.length; i++) {
        dropDownToggles[i].setAttribute('data-bs-toggle', 'dropdown');
    }
}

const sccTabs = function () {
    const tabs = document.querySelectorAll(
        'a.nav-link[data-toggle="tab"]'
    );
    for (let i = 0; i < tabs.length; i++) {
        let tab = tabs[i];
        tab.setAttribute('data-bs-toggle', 'tab');
    }
}

const sccModal = function () {
    const modalCloseButtons = document.querySelectorAll(
        '.modal-dialog button[data-dismiss="modal"]'
    );
    for (let i = 0; i < modalCloseButtons.length; i++) {
        let modalCloseButton = modalCloseButtons[i];
        modalCloseButton.setAttribute('data-bs-dismiss', 'modal');
    }
}

window.addEventListener('DOMContentLoaded', () => {
    sccDropDowns();
    sccTabs();
    sccModal();
});

window.closeBasketOffCanvas = function () {
    const cartOffCanvas = bootstrap.Offcanvas.getInstance('#offCanvasCart');
    if (cartOffCanvas == null) {
        return;
    }

    setTimeout(function () {
        cartOffCanvas.hide();
    }, 1000);
}

/*!
 * Cartzilla | Multipurpose E-Commerce Bootstrap HTML Template
 * Copyright 2024 Createx Studio
 * Theme scripts
 *
 * @author Createx Studio
 * @version 3.0.0
 */

// Bootstrap
import 'bootstrap.bundle'

// Components
import './components/pwa'
import './components/sticky-navbar'
import './components/sticky-element'
import './components/carousel'
import './components/lightbox'
import './components/countdown'
import './components/range-slider'
import './components/password-toggle'
import './components/count-input'
import './components/input-formatter'
import './components/form-validation'
import './components/autofocus'
import './components/scroll-top-button'
import './components/select-box'
import './components/dropdown-hover'
import './components/tooltip'
import './components/popover'
import './components/filter-list'
import './components/date-picker'
import './components/master-checkbox'
import './components/binded-label'
import './components/image-zoom'
import './components/code-highlight'
import './components/copy-text'
import './components/lightbox'
