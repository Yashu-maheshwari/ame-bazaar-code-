(() => {
	'use strict';

	document.querySelectorAll('[data-ame-bazaar-image-field]').forEach((field) => {
		const input = field.querySelector('[data-ame-bazaar-image-id]');
		const preview = field.querySelector('[data-ame-bazaar-image-preview]');
		const selectButton = field.querySelector('[data-ame-bazaar-select-image]');
		const removeButton = field.querySelector('[data-ame-bazaar-remove-image]');

		if (!input || !preview || !selectButton || !removeButton || !window.wp?.media) {
			return;
		}

		let frame;

		selectButton.addEventListener('click', () => {
			if (!frame) {
				frame = window.wp.media({
					title: selectButton.textContent,
					button: {
						text: selectButton.textContent,
					},
					multiple: false,
				});

				frame.on('select', () => {
					const attachment = frame.state().get('selection').first()?.toJSON();

					if (!attachment?.id) {
						return;
					}

					input.value = attachment.id;
					const imageUrl = attachment.sizes?.thumbnail?.url || attachment.url;
					preview.replaceChildren();

					if (imageUrl) {
						const image = document.createElement('img');
						image.src = imageUrl;
						image.alt = '';
						image.style.maxWidth = '160px';
						image.style.height = 'auto';
						preview.append(image);
					}
				});
			}

			frame.open();
		});

		removeButton.addEventListener('click', () => {
			input.value = '';
			preview.replaceChildren();
		});
	});
})();
