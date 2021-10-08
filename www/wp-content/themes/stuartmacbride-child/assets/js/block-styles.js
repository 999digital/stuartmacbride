wp.domReady( () => {

    // Remove styles 

    // wp.blocks.unregisterBlockStyle(
    //         'core/image', [ 'rounded' ]
    // );


    // Add Styles 
    wp.blocks.registerBlockStyle( 
		'core/paragraph', {
			name: 'intro',
			label: 'Intro',
		}
	);

    wp.blocks.registerBlockStyle( 
		'core/media-text', {
			name: 'image-shadow',
			label: 'Image Shadow',
		}
	);
    
    wp.blocks.registerBlockStyle( 
		'core/separator', {
			name: 'short',
			label: 'Short',
		}
	);
    
    wp.blocks.registerBlockStyle( 
		'core/group', {
			name: 'remove-vertical-spacing',
			label: 'Remove Vertical Spacing',
		}
	);

    wp.blocks.registerBlockStyle( 
		'core/button', {
			name: 'outline-white',
			label: 'Outline White',
		}
	);

    wp.blocks.registerBlockStyle( 
		'core/button', {
			name: 'fill-alt',
			label: 'Fill Alt',
		}
	);

    wp.blocks.registerBlockStyle( 
		'core/button', {
			name: 'preset-fill-ellow',
			label: 'Preset Fill Yellow',
		}
	);

    wp.blocks.registerBlockStyle( 
		'core/button', {
			name: 'preset-outline-black',
			label: 'Preset Outline Black',
		}
	);


} );