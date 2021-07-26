<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="antialiased">
    <x-navbar></x-navbar>

    <div class="flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="max-w-6xl mx-auto mb-4 sm:px-6 lg:px-8">
            <div class="flex flex-col justify-center pt-8 sm:pt-0">
                <svg class="h-24 w-auto text-gray-700" width="451.24000244140626px" height="130.439990234375px"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="24.37999877929687 9.780004882812506 451.24000244140626 130.439990234375"
                    style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;" preserveAspectRatio="xMidYMid">
                    <defs>
                        <linearGradient id="editing-incredible-gradient" x1="-0.41354545764260087"
                            x2="1.4135454576426008" y1="0.09326335692419985" y2="0.9067366430758002">
                            <stop offset="0" stop-color="#ff4"></stop>
                            <stop offset="1" stop-color="#f92"></stop>
                        </linearGradient>
                        <filter id="editing-incredible" x="-100%" y="-100%" width="300%" height="300%">
                            <feFlood flood-color="#000" flood-opacity="0.5" result="flood" x="10" y="10" width="480"
                                height="130"></feFlood>
                            <feFlood flood-color="#921" result="flood-stroke"></feFlood>
                            <feFlood flood-color="#fff" result="flood-outline"></feFlood>
                            <feFlood flood-color="#440000" result="flood-shadow"></feFlood>
                            <feImage x="0" y="0" width="500" height="150"
                                xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjAiIHk9IjAiIHdpZHRoPSI1MDAiIGhlaWdodD0iMTUwIj48cmFkaWFsR3JhZGllbnQgaWQ9ImluY3JlZGlibGUtZ3JhZGllbnQiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iI2QwZDBkMCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI2U0ZTRlNCIvPjwvcmFkaWFsR3JhZGllbnQ+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjUwMCIgaGVpZ2h0PSIxNTAiIGZpbGw9InVybCgjaW5jcmVkaWJsZS1ncmFkaWVudCkiLz48L3N2Zz4="
                                result="image"></feImage>
                            <feImage x="0" y="0" width="10" height="10"
                                xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjAiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCI+PGNpcmNsZSBjeD0iNSIgY3k9IjUiIHI9IjMiLz48L3N2Zz4="
                                result="dot"></feImage>
                            <feTile in="dot" result="tile"></feTile>
                            <feGaussianBlur stdDeviation="1.5" result="blur-tile"></feGaussianBlur>
                            <feBlend in2="image" in="blur-tile" mode="soft-light"></feBlend>
                            <feColorMatrix type="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  1 0 0 0 0">
                            </feColorMatrix>
                            <feComponentTransfer result="func">
                                <feFuncA type="linear" slope="20" intercept="-10.5"></feFuncA>
                            </feComponentTransfer>
                            <feComposite operator="out" in="flood" in2="func" result="dots"></feComposite>
                            <feOffset dx="3" dy="1" in="SourceAlpha"></feOffset>
                            <feComposite operator="out" in2="SourceAlpha"></feComposite>
                            <feComponentTransfer result="extrude">
                                <feFuncA type="linear" slope="0.7" intercept="-0.1"></feFuncA>
                            </feComponentTransfer>
                            <feMorphology operator="dilate" radius="5" in="SourceGraphic" result="dilate">
                            </feMorphology>
                            <feComposite operator="in" in="flood-stroke" in2="dilate" result="stroke"></feComposite>
                            <feOffset dx="1" dy="0" result="stroke-offset"></feOffset>
                            <feMorphology operator="dilate" radius="2" result="dilate-outline"></feMorphology>
                            <feComposite operator="in" in="flood-outline" in2="dilate-outline" result="outline">
                            </feComposite>
                            <feComposite operator="in" in="flood-shadow" in2="outline"></feComposite>
                            <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                            <feComponentTransfer>
                                <feFuncA type="linear" slope="0.7" intercept="-0.2"></feFuncA>
                            </feComponentTransfer>
                            <feOffset dx="0" dy="4" result="offset-shadow"></feOffset>
                            <feMerge>
                                <feMergeNode in="dots"></feMergeNode>
                                <feMergeNode in="offset-shadow"></feMergeNode>
                                <feMergeNode in="outline"></feMergeNode>
                                <feMergeNode in="stroke-offset"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                                <feMergeNode in="extrude"></feMergeNode>
                            </feMerge>
                        </filter>
                    </defs>
                    <g filter="url(#editing-incredible)">
                        <g transform="translate(91.90147852897644, 105.75)">
                            <path
                                d="M17.23-44.59L17.23-44.59L17.23-44.59Q19.50-44.59 21.58-44.17L21.58-44.17L21.58-44.17Q23.66-43.75 25.38-43.19L25.38-43.19L25.38-43.19Q27.11-42.64 28.31-42.05L28.31-42.05L28.31-42.05Q29.51-41.47 29.96-41.15L29.96-41.15L26.78-35.55L25.94-36.01L25.94-36.01Q25.09-36.47 23.73-37.05L23.73-37.05L23.73-37.05Q22.36-37.63 20.73-38.09L20.73-38.09L20.73-38.09Q19.11-38.55 17.62-38.55L17.62-38.55L17.62-38.55Q15.28-38.55 13.55-37.44L13.55-37.44L13.55-37.44Q11.83-36.34 11.83-34.00L11.83-34.00L11.83-34.00Q11.83-31.07 13.71-29.22L13.71-29.22L13.71-29.22Q15.60-27.37 19.63-25.80L19.63-25.80L19.63-25.80Q22.23-24.77 24.28-23.63L24.28-23.63L24.28-23.63Q26.32-22.49 27.76-21.00L27.76-21.00L27.76-21.00Q29.19-19.50 29.93-17.55L29.93-17.55L29.93-17.55Q30.68-15.60 30.68-12.87L30.68-12.87L30.68-12.87Q30.68-10.40 29.74-8.00L29.74-8.00L29.74-8.00Q28.80-5.59 26.94-3.74L26.94-3.74L26.94-3.74Q25.09-1.89 22.36-0.75L22.36-0.75L22.36-0.75Q19.63 0.39 16.05 0.39L16.05 0.39L16.05 0.39Q13.52 0.39 11.25-0.13L11.25-0.13L11.25-0.13Q8.97-0.65 7.12-1.33L7.12-1.33L7.12-1.33Q5.27-2.02 3.93-2.73L3.93-2.73L3.93-2.73Q2.60-3.45 1.95-3.83L1.95-3.83L4.68-9.81L5.85-9.17L5.85-9.17Q7.02-8.52 8.71-7.74L8.71-7.74L8.71-7.74Q10.40-6.96 12.29-6.31L12.29-6.31L12.29-6.31Q14.17-5.66 15.54-5.66L15.54-5.66L15.54-5.66Q18.98-5.66 20.67-7.35L20.67-7.35L20.67-7.35Q22.36-9.04 22.36-12.09L22.36-12.09L22.36-12.09Q22.36-13.52 21.91-14.59L21.91-14.59L21.91-14.59Q21.45-15.67 20.61-16.45L20.61-16.45L20.61-16.45Q19.76-17.23 18.56-17.84L18.56-17.84L18.56-17.84Q17.36-18.46 15.86-19.05L15.86-19.05L15.86-19.05Q12.94-20.28 10.63-21.52L10.63-21.52L10.63-21.52Q8.32-22.75 6.70-24.34L6.70-24.34L6.70-24.34Q5.07-25.94 4.23-27.98L4.23-27.98L4.23-27.98Q3.38-30.03 3.38-32.89L3.38-32.89L3.38-32.89Q3.38-35.30 4.42-37.41L4.42-37.41L4.42-37.41Q5.46-39.52 7.28-41.11L7.28-41.11L7.28-41.11Q9.10-42.70 11.63-43.65L11.63-43.65L11.63-43.65Q14.17-44.59 17.23-44.59ZM50.05-33.15L50.05-33.15Q57.52-33.15 60.91-28.73L60.91-28.73L60.91-28.73Q64.28-24.31 64.28-16.57L64.28-16.57L64.28-16.57Q64.28-12.94 63.38-9.78L63.38-9.78L63.38-9.78Q62.47-6.63 60.61-4.32L60.61-4.32L60.61-4.32Q58.76-2.02 55.97-0.68L55.97-0.68L55.97-0.68Q53.17 0.65 49.47 0.65L49.47 0.65L49.47 0.65Q45.76 0.65 43.06-0.49L43.06-0.49L43.06-0.49Q40.36-1.63 38.61-3.77L38.61-3.77L38.61-3.77Q36.85-5.92 36.04-8.97L36.04-8.97L36.04-8.97Q35.23-12.03 35.23-15.86L35.23-15.86L35.23-15.86Q35.23-19.57 36.14-22.72L36.14-22.72L36.14-22.72Q37.05-25.87 38.90-28.18L38.90-28.18L38.90-28.18Q40.75-30.48 43.55-31.82L43.55-31.82L43.55-31.82Q46.34-33.15 50.05-33.15L50.05-33.15ZM49.40-27.69L49.40-27.69Q47.52-27.69 46.31-26.85L46.31-26.85L46.31-26.85Q45.11-26 44.43-24.47L44.43-24.47L44.43-24.47Q43.74-22.95 43.48-20.90L43.48-20.90L43.48-20.90Q43.22-18.85 43.22-16.51L43.22-16.51L43.22-16.51Q43.22-14.11 43.52-11.96L43.52-11.96L43.52-11.96Q43.81-9.81 44.59-8.22L44.59-8.22L44.59-8.22Q45.37-6.63 46.70-5.72L46.70-5.72L46.70-5.72Q48.03-4.81 50.11-4.81L50.11-4.81L50.11-4.81Q52-4.81 53.20-5.66L53.20-5.66L53.20-5.66Q54.41-6.50 55.09-8.03L55.09-8.03L55.09-8.03Q55.77-9.55 56.03-11.57L56.03-11.57L56.03-11.57Q56.29-13.59 56.29-15.93L56.29-15.93L56.29-15.93Q56.29-18.33 56.00-20.48L56.00-20.48L56.00-20.48Q55.70-22.62 54.92-24.25L54.92-24.25L54.92-24.25Q54.14-25.87 52.81-26.78L52.81-26.78L52.81-26.78Q51.48-27.69 49.40-27.69L49.40-27.69ZM78.78 13.07L71.37 14.37L71.37-16.38L71.37-16.38Q71.37-20.28 70.85-22.91L70.85-22.91L70.85-22.91Q70.33-25.55 69.75-27.17L69.75-27.17L69.75-27.17Q69.03-29.05 68.19-30.23L68.19-30.23L74.03-32.56L74.03-32.56Q74.81-31.79 75.47-30.62L75.47-30.62L75.47-30.62Q75.98-29.64 76.50-28.24L76.50-28.24L76.50-28.24Q77.03-26.85 77.28-24.96L77.28-24.96L77.28-24.96Q78.39-28.86 80.80-30.88L80.80-30.88L80.80-30.88Q83.20-32.89 87.49-32.89L87.49-32.89L87.49-32.89Q90.55-32.89 92.79-31.75L92.79-31.75L92.79-31.75Q95.03-30.62 96.49-28.50L96.49-28.50L96.49-28.50Q97.95-26.39 98.67-23.40L98.67-23.40L98.67-23.40Q99.39-20.41 99.39-16.77L99.39-16.77L99.39-16.77Q99.39-13.07 98.28-9.91L98.28-9.91L98.28-9.91Q97.18-6.76 95.13-4.49L95.13-4.49L95.13-4.49Q93.08-2.21 90.22-0.91L90.22-0.91L90.22-0.91Q87.36 0.39 83.85 0.39L83.85 0.39L83.85 0.39Q82.62 0.39 81.35 0.26L81.35 0.26L81.35 0.26Q80.08 0.13 78.78 0L78.78 0L78.78 13.07ZM86.25-27.69L86.25-27.69Q84.63-27.69 83.27-26.59L83.27-26.59L83.27-26.59Q81.90-25.48 80.89-23.66L80.89-23.66L80.89-23.66Q79.89-21.84 79.33-19.57L79.33-19.57L79.33-19.57Q78.78-17.29 78.78-14.88L78.78-14.88L78.78-5.53L78.78-5.53Q79.43-5.33 80.73-5.07L80.73-5.07L80.73-5.07Q82.03-4.81 83.00-4.81L83.00-4.81L83.00-4.81Q85.47-4.81 87.10-5.66L87.10-5.66L87.10-5.66Q88.72-6.50 89.70-8.00L89.70-8.00L89.70-8.00Q90.68-9.49 91.06-11.57L91.06-11.57L91.06-11.57Q91.45-13.65 91.45-16.12L91.45-16.12L91.45-16.12Q91.45-18.39 91.33-20.48L91.33-20.48L91.33-20.48Q91.20-22.55 90.64-24.18L90.64-24.18L90.64-24.18Q90.09-25.80 89.05-26.75L89.05-26.75L89.05-26.75Q88.01-27.69 86.25-27.69L86.25-27.69ZM132.08-31.01L132.08-15.67L132.08-15.67Q132.08-11.77 132.57-9.13L132.57-9.13L132.57-9.13Q133.06-6.50 133.64-4.88L133.64-4.88L133.64-4.88Q134.35-2.93 135.20-1.82L135.20-1.82L129.41 0.52L129.41 0.52Q128.57-0.33 127.85-1.50L127.85-1.50L127.85-1.50Q127.27-2.54 126.75-4.00L126.75-4.00L126.75-4.00Q126.23-5.46 126.10-7.48L126.10-7.48L126.10-7.48Q124.99-3.58 122.56-1.59L122.56-1.59L122.56-1.59Q120.12 0.39 115.96 0.39L115.96 0.39L115.96 0.39Q112.91 0.39 110.66-0.75L110.66-0.75L110.66-0.75Q108.42-1.89 106.92-4.00L106.92-4.00L106.92-4.00Q105.43-6.11 104.71-9.10L104.71-9.10L104.71-9.10Q104-12.09 104-15.73L104-15.73L104-15.73Q104-19.44 105.14-22.59L105.14-22.59L105.14-22.59Q106.27-25.74 108.32-28.02L108.32-28.02L108.32-28.02Q110.37-30.29 113.23-31.59L113.23-31.59L113.23-31.59Q116.09-32.89 119.53-32.89L119.53-32.89L119.53-32.89Q121.48-32.89 123.60-32.60L123.60-32.60L123.60-32.60Q125.71-32.30 127.53-31.98L127.53-31.98L127.53-31.98Q129.35-31.66 130.62-31.36L130.62-31.36L130.62-31.36Q131.88-31.07 132.08-31.01L132.08-31.01ZM117.19-4.81L117.19-4.81Q118.82-4.81 120.19-5.92L120.19-5.92L120.19-5.92Q121.55-7.02 122.56-8.81L122.56-8.81L122.56-8.81Q123.56-10.60 124.12-12.90L124.12-12.90L124.12-12.90Q124.67-15.21 124.67-17.62L124.67-17.62L124.67-26.98L124.67-26.98Q124.02-27.17 122.72-27.43L122.72-27.43L122.72-27.43Q121.42-27.69 120.38-27.69L120.38-27.69L120.38-27.69Q117.91-27.69 116.32-26.85L116.32-26.85L116.32-26.85Q114.72-26 113.75-24.51L113.75-24.51L113.75-24.51Q112.77-23.01 112.38-20.93L112.38-20.93L112.38-20.93Q111.99-18.85 111.99-16.38L111.99-16.38L111.99-16.38Q111.99-14.11 112.13-12.03L112.13-12.03L112.13-12.03Q112.25-9.95 112.81-8.32L112.81-8.32L112.81-8.32Q113.36-6.70 114.40-5.75L114.40-5.75L114.40-5.75Q115.44-4.81 117.19-4.81L117.19-4.81ZM166.98 0L159.64 0L159.64-21.00L159.64-21.00Q159.64-23.73 158.66-25.38L158.66-25.38L158.66-25.38Q157.69-27.04 155.35-27.04L155.35-27.04L155.35-27.04Q153.85-27.04 152.46-26.29L152.46-26.29L152.46-26.29Q151.06-25.55 149.95-24.12L149.95-24.12L149.95-24.12Q148.85-22.69 148.17-20.64L148.17-20.64L148.17-20.64Q147.48-18.59 147.48-16.05L147.48-16.05L147.48 0L140.07 0L140.07-16.38L140.07-16.38Q140.07-20.28 139.55-22.91L139.55-22.91L139.55-22.91Q139.03-25.55 138.45-27.17L138.45-27.17L138.45-27.17Q137.73-29.05 136.89-30.23L136.89-30.23L142.74-32.56L142.74-32.56Q143.39-31.85 144.04-30.81L144.04-30.81L144.04-30.81Q144.56-29.90 145.08-28.57L145.08-28.57L145.08-28.57Q145.60-27.23 145.92-25.55L145.92-25.55L145.92-25.55Q147.61-29.45 150.80-31.17L150.80-31.17L150.80-31.17Q153.98-32.89 157.49-32.89L157.49-32.89L157.49-32.89Q162.50-32.89 164.74-29.87L164.74-29.87L164.74-29.87Q166.98-26.85 166.98-21.71L166.98-21.71L166.98 0ZM220.22-39.91L216.25-35.16L216.25-35.16Q214.69-36.86 212.97-37.73L212.97-37.73L212.97-37.73Q211.25-38.61 208.97-38.61L208.97-38.61L208.97-38.61Q206.18-38.61 204.26-37.34L204.26-37.34L204.26-37.34Q202.34-36.08 201.17-33.83L201.17-33.83L201.17-33.83Q200.00-31.59 199.48-28.60L199.48-28.60L199.48-28.60Q198.96-25.61 198.96-22.16L198.96-22.16L198.96-22.16Q198.96-18.72 199.45-15.73L199.45-15.73L199.45-15.73Q199.94-12.74 201.14-10.46L201.14-10.46L201.14-10.46Q202.34-8.19 204.39-6.89L204.39-6.89L204.39-6.89Q206.44-5.59 209.56-5.59L209.56-5.59L209.56-5.59Q211.05-5.59 212.42-5.85L212.42-5.85L212.42-5.85Q213.78-6.11 214.92-6.40L214.92-6.40L214.92-6.40Q216.06-6.70 216.81-6.96L216.81-6.96L216.81-6.96Q217.55-7.21 217.75-7.28L217.75-7.28L219.57-1.82L218.72-1.50L218.72-1.50Q217.88-1.17 216.35-0.75L216.35-0.75L216.35-0.75Q214.82-0.33 212.71 0.03L212.71 0.03L212.71 0.03Q210.60 0.39 208.06 0.39L208.06 0.39L208.06 0.39Q199.35 0.39 194.97-5.17L194.97-5.17L194.97-5.17Q190.58-10.72 190.58-21.45L190.58-21.45L190.58-21.45Q190.58-26.59 191.75-30.84L191.75-30.84L191.75-30.84Q192.92-35.10 195.29-38.16L195.29-38.16L195.29-38.16Q197.66-41.21 201.27-42.90L201.27-42.90L201.27-42.90Q204.88-44.59 209.75-44.59L209.75-44.59L209.75-44.59Q213.65-44.59 216.16-43.16L216.16-43.16L216.16-43.16Q218.66-41.73 220.22-39.91L220.22-39.91ZM233.15-47.13L233.15-28.21L233.15-28.21Q235.04-30.68 237.67-31.79L237.67-31.79L237.67-31.79Q240.30-32.89 243.23-32.89L243.23-32.89L243.23-32.89Q248.23-32.89 250.48-29.87L250.48-29.87L250.48-29.87Q252.72-26.85 252.72-21.71L252.72-21.71L252.72 0L245.31 0L245.31-21.19L245.31-21.19Q245.31-23.92 244.33-25.51L244.33-25.51L244.33-25.51Q243.36-27.11 241.02-27.11L241.02-27.11L241.02-27.11Q239.65-27.11 238.26-26.39L238.26-26.39L238.26-26.39Q236.86-25.68 235.72-24.34L235.72-24.34L235.72-24.34Q234.58-23.01 233.87-21.19L233.87-21.19L233.87-21.19Q233.15-19.37 233.15-17.16L233.15-17.16L233.15 0L225.74 0L225.74-45.83L233.15-47.13ZM286.98-31.01L286.98-15.67L286.98-15.67Q286.98-11.77 287.46-9.13L287.46-9.13L287.46-9.13Q287.95-6.50 288.54-4.88L288.54-4.88L288.54-4.88Q289.25-2.93 290.10-1.82L290.10-1.82L284.31 0.52L284.31 0.52Q283.47-0.33 282.75-1.50L282.75-1.50L282.75-1.50Q282.17-2.54 281.64-4.00L281.64-4.00L281.64-4.00Q281.13-5.46 281.00-7.48L281.00-7.48L281.00-7.48Q279.89-3.58 277.45-1.59L277.45-1.59L277.45-1.59Q275.01 0.39 270.86 0.39L270.86 0.39L270.86 0.39Q267.80 0.39 265.56-0.75L265.56-0.75L265.56-0.75Q263.31-1.89 261.82-4.00L261.82-4.00L261.82-4.00Q260.32-6.11 259.61-9.10L259.61-9.10L259.61-9.10Q258.89-12.09 258.89-15.73L258.89-15.73L258.89-15.73Q258.89-19.44 260.03-22.59L260.03-22.59L260.03-22.59Q261.17-25.74 263.22-28.02L263.22-28.02L263.22-28.02Q265.26-30.29 268.13-31.59L268.13-31.59L268.13-31.59Q270.99-32.89 274.43-32.89L274.43-32.89L274.43-32.89Q276.38-32.89 278.49-32.60L278.49-32.60L278.49-32.60Q280.61-32.30 282.43-31.98L282.43-31.98L282.43-31.98Q284.25-31.66 285.51-31.36L285.51-31.36L285.51-31.36Q286.78-31.07 286.98-31.01L286.98-31.01ZM272.09-4.81L272.09-4.81Q273.72-4.81 275.08-5.92L275.08-5.92L275.08-5.92Q276.44-7.02 277.45-8.81L277.45-8.81L277.45-8.81Q278.46-10.60 279.01-12.90L279.01-12.90L279.01-12.90Q279.56-15.21 279.56-17.62L279.56-17.62L279.56-26.98L279.56-26.98Q278.92-27.17 277.62-27.43L277.62-27.43L277.62-27.43Q276.31-27.69 275.27-27.69L275.27-27.69L275.27-27.69Q272.81-27.69 271.21-26.85L271.21-26.85L271.21-26.85Q269.62-26 268.64-24.51L268.64-24.51L268.64-24.51Q267.67-23.01 267.28-20.93L267.28-20.93L267.28-20.93Q266.89-18.85 266.89-16.38L266.89-16.38L266.89-16.38Q266.89-14.11 267.02-12.03L267.02-12.03L267.02-12.03Q267.15-9.95 267.70-8.32L267.70-8.32L267.70-8.32Q268.25-6.70 269.30-5.75L269.30-5.75L269.30-5.75Q270.33-4.81 272.09-4.81L272.09-4.81ZM292.11-27.11L292.11-32.37L297.96-32.37L299.26-39.98L305.37-41.34L305.37-32.37L313.37-32.37L312.46-27.11L305.37-27.11L305.37-7.87L305.37-7.87Q305.37-6.17 306.28-5.69L306.28-5.69L306.28-5.69Q307.19-5.20 308.30-5.20L308.30-5.20L308.30-5.20Q309.21-5.20 310.12-5.33L310.12-5.33L310.12-5.33Q311.03-5.46 311.74-5.66L311.74-5.66L311.74-5.66Q312.59-5.85 313.37-6.11L313.37-6.11L314.60-1.24L314.02-1.04L314.02-1.04Q313.43-0.78 312.29-0.49L312.29-0.49L312.29-0.49Q311.16-0.20 309.63 0.03L309.63 0.03L309.63 0.03Q308.10 0.26 306.28 0.26L306.28 0.26L306.28 0.26Q304.46 0.26 302.93-0.13L302.93-0.13L302.93-0.13Q301.41-0.52 300.30-1.40L300.30-1.40L300.30-1.40Q299.20-2.27 298.58-3.64L298.58-3.64L298.58-3.64Q297.96-5.00 297.96-7.02L297.96-7.02L297.96-27.11L292.11-27.11Z"
                                fill="url(#editing-incredible-gradient)"></path>
                        </g>
                    </g>
                </svg>
                <span class="font-light text-center">by Reno Nugraha</span>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>