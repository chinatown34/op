function TabbedMenu(controlId, tabsIds) {
    this.ShowTab = function (currentLink, currentTabId) {

        for (var i = 0; i < tabsIds.length; i++) {
            $(tabsIds[i]).hide();
        }

        $(currentTabId).show();

        $(controlId).find('div').not('.right').hide();
        $(controlId).find('a').show();

        $(currentLink).prev('div').show();
        $(currentLink).hide();

    };

}