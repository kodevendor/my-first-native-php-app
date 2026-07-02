<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<native:top-bar title="Dashboard" subtitle="Welcome back">
    <native:top-bar-action
        id="search"
        label="Search"
        icon="search"
        url="#"
    />
    <native:top-bar-action
        id="settings"
        icon="settings"
        label="Settings"
        url="{{ route('mobile.settings') }}"
    />
</native:top-bar>

<native:side-nav gestures-enabled="true">
    <native:side-nav-header
        title="My App"
        subtitle="user@example.com"
        icon="person"
    />

    <native:side-nav-item
        id="home"
        label="Home"
        icon="home"
        url="{{ route('mobile.home') }}"
        :active="true"
    />

    <native:side-nav-group heading="Account" :expanded="false">
        <native:side-nav-item
            id="profile"
            label="Profile"
            icon="person"
            url="{{ route('mobile.profile') }}"
        />
        <native:side-nav-item
            id="settings"
            label="Settings"
            icon="settings"
            url="{{ route('mobile.settings') }}"
        />
    </native:side-nav-group>

    <native:horizontal-divider />

    <native:side-nav-item
        id="logout"
        label="Logout"
        icon="logout"
        url="{{ route('logout') }}"
    />
</native:side-nav>

@yield('content')

<native:bottom-nav label-visibility="labeled">
    <native:bottom-nav-item
        id="home"
        icon="home"
        label="Home"
        url="{{ route('mobile.home') }}"
        :active="true"
    />
    <native:bottom-nav-item
        id="profile"
        icon="person"
        label="Profile"
        url="{{ route('mobile.profile') }}"
        badge="3"
    />
</native:bottom-nav>
</body>
</html>
