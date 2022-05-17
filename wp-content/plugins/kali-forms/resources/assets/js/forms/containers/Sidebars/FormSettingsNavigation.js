import HubSpotLogo from '@img/hubspot.svg';
import SlackLogo from '@img/slack.svg';
import GSheetsLogo from '@img/gsheets.svg';
const { __ } = wp.i18n;
export default [
	{
		id: 'general',
		iconType: 'icon',
		icon: 'icon-settings',
		text: __('General', 'kaliforms'),
		pro: false,
		check: true,
	},
	{
		id: 'styling',
		iconType: 'icon',
		icon: 'icon-brush',
		text: __('Form styling', 'kaliforms'),
		pro: false,
		check: true,
	},
	{
		id: 'spam',
		iconType: 'icon',
		icon: 'icon-spam',
		text: __('Spam protection', 'kaliforms'),
		pro: false,
		check: true,
	},
	{
		id: 'conditionalLogic',
		iconType: 'icon',
		icon: 'icon-logic',
		text: __('Conditional logic', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.conditionalLogic !== 'undefined',
	},
	{
		id: 'payments',
		iconType: 'icon',
		icon: 'icon-payment',
		text: __('Payments', 'kaliforms'),
		pro: false,
		check: true,
	},
	{
		id: 'stripeSettings',
		iconType: 'icon',
		icon: 'icon-stripe',
		text: __('Stripe settings', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.payments !== 'undefined',
	},
	{
		id: 'userRegistration',
		iconType: 'icon',
		icon: 'icon-add-user',
		text: __('User registration', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.userRegistrationInstalled !== 'undefined',
	},
	{
		id: 'webhooks',
		iconType: 'icon',
		icon: 'icon-upload-1',
		text: __('Web Hooks', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.webhooksInstalled !== 'undefined',
	},
	{
		id: 'formCalculator',
		iconType: 'icon',
		icon: 'icon-calculator',
		text: __('Calculator', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.conditionalLogic !== 'undefined',
	},
	{
		id: 'formCustomCss',
		iconType: 'icon',
		icon: 'icon-css',
		text: __('Custom CSS', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.conditionalLogic !== 'undefined',
	},
	{
		id: 'formCustomJs',
		iconType: 'icon',
		icon: 'icon-js',
		text: __('Custom JS', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.conditionalLogic !== 'undefined',
	},
	{
		id: 'formCustomPhp',
		iconType: 'icon',
		icon: 'icon-php',
		text: __('Custom PHP', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.conditionalLogic !== 'undefined',
	},
	{
		id: 'newsletter',
		iconType: 'icon',
		icon: 'icon-email',
		text: __('Newsletter', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.newsletterInstalled !== 'undefined',
	},
	{
		id: 'slack',
		iconType: 'image',
		icon: SlackLogo,
		text: __('Slack', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.slackInstalled !== 'undefined',
	},
	{
		id: 'hubspotIntegration',
		iconType: 'image',
		icon: HubSpotLogo,
		text: __('HubSpot', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.hubspotInstalled !== 'undefined',
	},
	{
		id: 'googleSheets',
		iconType: 'image',
		icon: GSheetsLogo,
		text: __('Google sheets', 'kaliforms'),
		pro: true,
		check: typeof KaliFormsObject.googleSheetsInstalled !== 'undefined',
	}
];
