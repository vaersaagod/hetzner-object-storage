# Hetzner Object Storage Filesystem

Hetzner Object Storage filesystem for Craft CMS.

Adds a "Hetzner Object Storage" filesystem type to Craft, for storing assets in [Hetzner Object Storage](https://www.hetzner.com/storage/object-storage/) (S3-compatible) buckets.

## Requirements

This plugin requires Craft CMS 5.10.0 or later, and PHP 8.2 or later.

## Installation

You can install this plugin from the Plugin Store or with Composer.

#### From the Plugin Store

Go to the Plugin Store in your project’s Control Panel and search for “Hetzner Object Storage Filesystem”. Then press “Install”.

#### With Composer

Open your terminal and run the following commands:

```bash
# go to the project directory
cd /path/to/my-project.test

# tell Composer to load the plugin
composer require vaersaagod/hetzner-object-storage

# tell Craft to install the plugin
./craft plugin/install hetzner-object-storage
```

## Setup

Create a new filesystem in Craft (Settings → Filesystems) and choose "Hetzner Object Storage" as the filesystem type.

### Settings

- **Region** (required) – The Hetzner location the bucket was created in, e.g. `fsn1` (Falkenstein), `nbg1` (Nuremberg) or `hel1` (Helsinki).
- **Bucket** (required) – The bucket name.
- **Endpoint** (optional) – The S3 API endpoint. If left blank, it is derived from the region as `https://[region].your-objectstorage.com`.
- **Use path-style addressing** (default: on) – Whether the S3 API should be addressed with path-style URLs (`https://[region].your-objectstorage.com/[bucket-name]`) instead of virtual-host style (`https://[bucket-name].[region].your-objectstorage.com`). Only affects API requests, not public file URLs.
- **Subfolder** (optional) – Use a subfolder in the bucket as the filesystem root.
- **Access Key ID / Secret Access Key** (required) – Created in the Hetzner Cloud Console under "Object Storage" → "Manage credentials".
- **Cache Duration / Content Disposition** (optional) – `Cache-Control` and `Content-Disposition` headers to upload files with.

If the filesystem should have public URLs, enable the "Files in this filesystem have public URLs" lightswitch and set the Base URL to the bucket URL, i.e. `https://[region].your-objectstorage.com/[bucket-name]` (virtual-host style, `https://[bucket-name].[region].your-objectstorage.com`, also works). Don't include the subfolder, if you're using one.

All settings support environment variables, e.g.:

```
HETZNER_REGION="fsn1"
HETZNER_BUCKET="my-bucket"
HETZNER_KEY_ID="..."
HETZNER_SECRET="..."
```
