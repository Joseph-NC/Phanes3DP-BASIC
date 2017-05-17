<div id="pqc-wrapper" class="container">
    
    <div class="content">

        <div class="box">
        
            <form action="<?php echo get_permalink( pqc_page_exists( 'pqc-cart' ) ); ?>" method="POST" enctype="multipart/form-data">
            
                <input type="file" name="pqc_file[]" id="pqc_file" class="inputfile inputfile-1" multiple=""/>
                
                <label for="pqc_file">
                    <figure>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                        </svg>
                    </figure>
                    <span><?php _e( 'Choose a file&hellip;', 'pqc' ); ?></span>
                </label>
                
                <br>
                
                <input type="submit" name="pqc_file_upload" value="Upload" />
                
            </form>
            
        </div>
        
    </div>
    
</div><!-- /container -->