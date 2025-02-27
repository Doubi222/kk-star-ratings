# Change Log

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [5.2.0] - 2021-11-02

### Updated
- Deprecated the use of migrations in favor of migrating posts when accessed.

## [5.1.4] - 2021-11-01

### Updated
- Migrate 5 posts instead of 20 per batch.

### Fixed
- Migrations for the same version were duplicated.

## [5.1.3] - 2021-11-01

### Updated
- Migrate 20 posts instead of 50 per batch.

### Fixed
- Migrations were not being processed continuously due to a javascript bug.

## [5.1.2] - 2021-11-01

### Fixed
- Migrations now correctly run in the background when the frontend is open.

## [5.1.1] - 2021-11-01

### Updated
- More detailed information is now displayed in `pending migrations` notice.

## [5.1.0] - 2021-10-31

### Added
- Batched migrations. Posts are now migrated in batches in the background.

### Fixed
- Bumped template code priority.


## [5.0.3] - 2021-10-11

### Updated
- Freemius sdk upgraded to 2.4.2

### Fixed
- Enforce casting of post id to int when calculating for meta box.
- Disallowed check for regex expression when using find() in order to supress warning in PHP 8.

## [5.0.2] - 2021-10-11

### Fixed
- Force legend to the default in order to override dangling v2 legend.

## [5.0.1] - 2021-10-10

### Fixed
- Activation would not be executed when upgrading via wp org. Fixed by activating after plugin is loaded.

## [5.0.0] - 2021-10-09

### Release
- Fresh codebase