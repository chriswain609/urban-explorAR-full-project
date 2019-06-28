//
//  object.swift
//  urban explorAR
//
//  Created by Christopher Wainwright on 07/02/2019.
//  Copyright © 2019 Christopher Wainwright. All rights reserved.
//

import Foundation

// structure to read objects from json output
struct object: Decodable {
    let object_id: String
    let longitude: String
    let latitude: String
    let label: String
    let treasure_hunt_id: String
}
