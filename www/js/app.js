$( document ).ready(function() {
    
    /**
     * detect when a quick view button has been clicked 
     * and run the function that loads the overlay.
     */
    $('body').on('click', '.quick-view', function(){
        
        var sku = $(this).data('sku'),
            src = 'product',
            par = '?sku=' + sku;
            
            showOverlay(src + par);
            
    });
    
    /**
     * Detect when the close overlay cross has been clicked 
     * and run the function that closes the overlay.
     */
    $('body').on('click', '#closeOverlay', hideOverlay);
	
});

/** 
 * This function makes an ajax call that returns the content 
 * to be loaded into the overlay placeholder, and then 
 * displays the overlay.
 * 
 * @param {type} src - source file for ajax call
 */
function showOverlay(src){
    $('#overlayContent').load(src, function(){
        $(this).append('<a href="javascript:void(0)" id="closeOverlay"></a>');
        $('#overlay').addClass('show');
    });
}

/**
 * This function hides the overlay container and removes any loaded content.
 */
function hideOverlay() {
    $('#overlay').removeClass('show', function(){
        $('#overlayContent').html('');
    });
}