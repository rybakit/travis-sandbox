#!/usr/bin/tarantool

box.cfg {
    listen = 3301,
    log_level = 6,
    wal_mode = 'none',
    snap_dir = '/tmp',
}

local function create_space(name)
    if box.space[name] then
        box.space[name]:drop()
    end

    return box.schema.space.create(name, {temporary = true})
end

local space = create_space('space_conn')
space:create_index('primary', {type = 'tree', parts = {1, 'num'}})
