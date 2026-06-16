import { createApp, h } from 'vue';

const appState = {
	menuItems: [
		{ label: 'Services', href: '#services' },
		{ label: 'GitHub', href: 'https://github.com/fsa-productions', external: true },
		{ label: 'Videos', href: '#videos' },
	],
	services: [
		{
			title: 'Production planning',
			description: 'Structured pre-production, creative direction, and delivery planning for polished output.',
		},
		{
			title: 'Video production',
			description: 'Branded clips, interviews, social content, and event coverage tailored to your story.',
		},
		{
			title: 'Post-production',
			description: 'Editing, motion graphics, color, and sound work that makes the final cut feel complete.',
		},
	],
	videos: ['Brand films', 'Promo edits', 'Behind-the-scenes coverage', 'Social-first content'],
};

createApp({
	data() {
		return appState;
	},
	render() {
		return h('div', { class: 'min-h-screen bg-[#08111f] text-white' }, [
			h('div', { class: 'absolute inset-0 -z-10 overflow-hidden' }, [
				h('div', { class: 'absolute left-1/2 top-[-8rem] h-[32rem] w-[32rem] -translate-x-1/2 rounded-full bg-[#ff7a45]/20 blur-3xl' }),
				h('div', { class: 'absolute right-[-6rem] top-[14rem] h-[24rem] w-[24rem] rounded-full bg-[#ffcc66]/10 blur-3xl' }),
				h('div', { class: 'absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.08),_transparent_35%),linear-gradient(180deg,_rgba(10,17,31,0.85),_rgba(8,17,31,1))]' }),
			]),
			h('div', { class: 'mx-auto flex min-h-screen w-full max-w-6xl flex-col px-6 pb-12 pt-6 lg:px-10' }, [
				h('header', { class: 'flex flex-col gap-6 border-b border-white/10 pb-6 sm:flex-row sm:items-center sm:justify-between' }, [
					h('div', [
						h('p', { class: 'text-xs font-semibold uppercase tracking-[0.45em] text-[#ffcc66]' }, 'FSA Productions'),
						h('h1', { class: 'mt-3 text-3xl font-semibold tracking-tight sm:text-5xl' }, 'FSA Productions'),
					]),
					h('nav', { class: 'flex flex-wrap gap-3' }, appState.menuItems.map((item) => h('a', {
						key: item.label,
						href: item.href,
						target: item.external ? '_blank' : undefined,
						rel: item.external ? 'noreferrer' : undefined,
						class: 'inline-flex items-center rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm font-medium text-white/90 transition hover:border-[#ffcc66]/60 hover:bg-white/10',
					}, item.label))),
				]),
				h('main', { class: 'flex flex-1 flex-col justify-between gap-12 py-10' }, [
					h('section', { class: 'grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center' }, [
						h('div', { class: 'space-y-6' }, [
							h('span', { class: 'inline-flex rounded-full border border-[#ffcc66]/30 bg-[#ffcc66]/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-[#ffcc66]' }, 'Creative video studio'),
							h('h2', { class: 'max-w-2xl text-5xl font-semibold tracking-tight text-white sm:text-6xl' }, 'Sharp visuals, clean edits, and stories built to land.'),
							h('p', { class: 'max-w-xl text-lg leading-8 text-white/70' }, 'FSA Productions creates modern video work for brands, campaigns, and creators who need a homepage that feels confident and direct.'),
							h('div', { class: 'flex flex-wrap gap-4' }, [
								h('a', { href: '#services', class: 'rounded-full bg-[#ffcc66] px-6 py-3 font-semibold text-[#08111f] transition hover:scale-[1.02] hover:bg-[#ffd98a]' }, 'Explore services'),
								h('a', { href: '#videos', class: 'rounded-full border border-white/15 bg-white/5 px-6 py-3 font-semibold text-white/90 transition hover:border-white/30 hover:bg-white/10' }, 'See video ideas'),
							]),
						]),
						h('div', { class: 'rounded-[2rem] border border-white/10 bg-white/8 p-6 shadow-2xl shadow-black/30 backdrop-blur-xl' }, [
							h('div', { class: 'grid gap-4 sm:grid-cols-2' }, [
								h('div', { class: 'rounded-2xl border border-white/10 bg-black/20 p-5' }, [
									h('p', { class: 'text-sm uppercase tracking-[0.3em] text-white/45' }, 'Focus'),
									h('p', { class: 'mt-3 text-2xl font-semibold' }, 'Production with intent'),
								]),
								h('div', { class: 'rounded-2xl border border-white/10 bg-black/20 p-5' }, [
									h('p', { class: 'text-sm uppercase tracking-[0.3em] text-white/45' }, 'Delivery'),
									h('p', { class: 'mt-3 text-2xl font-semibold' }, 'Fast, polished, flexible'),
								]),
							]),
							h('div', { class: 'mt-4 rounded-2xl border border-white/10 bg-gradient-to-br from-white/10 to-white/5 p-5' }, [
								h('p', { class: 'text-sm font-medium uppercase tracking-[0.28em] text-[#ffcc66]' }, 'What we make'),
								h('ul', { class: 'mt-4 grid gap-3 text-sm text-white/80 sm:grid-cols-2' }, appState.videos.map((video) => h('li', { key: video, class: 'rounded-full border border-white/10 bg-black/20 px-4 py-3' }, video))),
							]),
						]),
					]),
					h('section', { id: 'services', class: 'grid gap-4 md:grid-cols-3' }, appState.services.map((service) => h('article', { key: service.title, class: 'rounded-3xl border border-white/10 bg-white/6 p-6 backdrop-blur-sm transition hover:-translate-y-1 hover:border-[#ffcc66]/25 hover:bg-white/8' }, [
						h('p', { class: 'text-sm uppercase tracking-[0.3em] text-[#ffcc66]' }, 'Service'),
						h('h3', { class: 'mt-4 text-2xl font-semibold' }, service.title),
						h('p', { class: 'mt-3 leading-7 text-white/70' }, service.description),
					]))),
					h('section', { id: 'videos', class: 'flex flex-col gap-4 rounded-[2rem] border border-white/10 bg-gradient-to-r from-white/8 to-white/4 p-6 md:flex-row md:items-center md:justify-between' }, [
						h('div', [
							h('p', { class: 'text-sm uppercase tracking-[0.3em] text-[#ffcc66]' }, 'Videos'),
							h('h3', { class: 'mt-3 text-2xl font-semibold' }, 'Built for platforms, presentations, and launches.'),
						]),
						h('p', { class: 'max-w-xl text-white/70' }, 'Use the menu to jump between services, GitHub, and videos or keep scrolling for a quick look at the production range.'),
					]),
				]),
			]),
		]);
	},
}).mount('#app');
